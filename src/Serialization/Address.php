<?php

namespace Codelayer\Columbus\Serialization;

class Address
{
    /**
     * @var String
     */
    protected $country_code;

    /**
     * @var String
     */
    protected $postal_code;

    /**
     * @var String
     */
    protected $locality;

    /**
     * @var String
     */
    protected $address_line_1;

    /**
     * @var String
     */
    protected $address_line_2;

    /**
     * @var String
     */
    protected $locale;

    /**
     * @param mixed $country_code
     *
     * @return Address
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param mixed $postal_code
     *
     * @return Address
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param String $locality
     *
     * @return Address
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * @return String
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param String $address_line_1
     *
     * @return Address
     */
    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;

        return $this;
    }

    /**
     * @return String
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    /**
     * @param String $address_line_2
     *
     * @return Address
     */
    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;

        return $this;
    }

    /**
     * @return String
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    /**
     * @param String $locale
     *
     * @return Address
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return String
     */
    public function getLocale()
    {
        return $this->locale;
    }

}