<?php

namespace Codelayer\Columbus\Providers;

use Codelayer\Columbus\Helpers\IsoCodeHelper;
use Codelayer\Columbus\Serialization\Address;
use Codelayer\Columbus\Configs\Config;
use Codelayer\Columbus\Contracts\AddressSearchProvider as ProviderContract;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class Here implements ProviderContract
{
    /**
     * @var string
     */
    protected static $endpoint = 'https://autocomplete.geocoder.api.here.com/6.2/suggest.json?app_id=%s&app_code=%s&query=%s';

    /**
     * @var Client
     */
    protected $http;

    /**
     * @var string
     */
    protected $app_id;

    /**
     * @var string
     */
    protected $app_code;

    /**
     * Here constructor.
     *
     * @param Client $http
     * @param Config $config
     */
    public function __construct(Client $http, Config $config)
    {
        $this->http = $http;

        $this->app_id = $config->getId();
        $this->app_code = $config->getSecret();
    }

    /**
     * @param $input
     *
     * @return Collection
     */
    public function suggest($input)
    {
        $response = $this->http->get(sprintf(self::$endpoint, $this->app_id, $this->app_code, $input));

        $suggestions = collect(json_decode($response->getBody())->suggestions);

        return $suggestions->map(function ($suggestion) {
            $street = $suggestion->address->street ?? false;
            $houseNumber = $suggestion->address->houseNumber ?? false;
            $firstLine = $street || $houseNumber ? trim(join(' ', [$street, $houseNumber])) : null;

            return (new Address())
                ->setLocale($suggestion->language)
                ->setCountryCode(IsoCodeHelper::getTwoLetterCode($suggestion->countryCode))
                ->setPostalCode($suggestion->address->postalCode ?? null)
                ->setLocality($suggestion->address->city ?? null)
                ->setAddressLine1($firstLine);
        });
    }
}