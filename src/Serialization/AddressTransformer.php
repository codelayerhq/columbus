<?php

namespace Codelayer\Columbus\Serialization;

use League\Fractal\TransformerAbstract;

class AddressTransformer extends TransformerAbstract
{
    /**
     * @param Address $address
     *
     * @return array
     */
    public function transform(Address $address)
    {
        return [
            'country_code'   => $address->getCountryCode(),
            'postal_code'    => (string) $address->getPostalCode(),
            'locality'       => $address->getLocality(),
            'address_line_1' => $address->getAddressLine1(),
            'address_line_2' => $address->getAddressLine2(),
            'locale'         => $address->getLocale(),
        ];
    }
}