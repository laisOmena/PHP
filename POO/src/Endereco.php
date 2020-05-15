<?php


class Endereco
{
    private string $city;
    private string $district;
    private string $street;
    private string $number;

    /**
     * Endereco constructor.
     * @param string $city
     * @param string $district
     * @param string $street
     * @param string $number
     */
    public function __construct(string $city, string $district, string $street, string $number)
    {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }


}