<?php

namespace Codelayer\Columbus\Contracts;

use Codelayer\Columbus\Configs\Config;
use Codelayer\Columbus\Serialization\Address;
use GuzzleHttp\Client;

interface AddressSearchProvider
{
    /**
     * AddressSearchProvider constructor.
     *
     * @param Client $http
     * @param Config $config
     */
    public function __construct(Client $http, Config $config);

    /**
     * @param $input
     *
     * @return Address[]
     */
    public function suggest($input);
}