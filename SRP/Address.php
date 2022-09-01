<?php

declare(strict_types=1);

/**
 * Address class
 */
class Address
{
    /** @var string */
    private string $addressStreet;

    /** @var string */
    private string $addressNeighbourhood;

    /**@var int */
    private int $addressNumber;

    /** @var string */
    private string $addressComplement;

    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        return "
            {$this->addressStreet}, 
            {$this->addressNumber},
            {$this->addressNeighbourhood},
            {$this->addressComplement}
        ";
    }

    /**
     * @return string
     */
    public function getAddressStreet(): string
    {
        return $this->addressStreet;
    }

    /**
     * @param string $addressStreet
     */
    public function setAddressStreet(string $addressStreet): void
    {
        $this->addressStreet = $addressStreet;
    }

    /**
     * @return string
     */
    public function getAddressNeighbourhood(): string
    {
        return $this->addressNeighbourhood;
    }

    /**
     * @param string $addressNeighbourhood
     */
    public function setAddressNeighbourhood(string $addressNeighbourhood): void
    {
        $this->addressNeighbourhood = $addressNeighbourhood;
    }

    /**
     * @return int
     */
    public function getAddressNumber(): int
    {
        return $this->addressNumber;
    }

    /**
     * @param int $addressNumber
     */
    public function setAddressNumber(int $addressNumber): void
    {
        $this->addressNumber = $addressNumber;
    }

    /**
     * @return string
     */
    public function getAddressComplement(): string
    {
        return $this->addressComplement;
    }

    /**
     * @param string $addressComplement
     */
    public function setAddressComplement(string $addressComplement): void
    {
        $this->addressComplement = $addressComplement;
    }
}