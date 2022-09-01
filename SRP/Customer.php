<?php

declare(strict_types=1);

/**
 * Customer class
 */
class Customer
{
    /** @var string */
    private string $name;

    /** @var string */
    private string $phone;

    /** @var int */
    private int $customerSince;

    /** @var string */
    private string $addressStreet;

    /** @var string */
    private string $addressNeighbourhood;

    /**@var int */
    private int $addressNumber;

    /** @var string */
    private string $addressComplement;

    /**
     * @param string $name
     * @param string $phone
     * @param int $customerSince
     * @param string $addressStreet
     * @param string $addressNeighbourhood
     * @param int $addressNumber
     * @param string $addressComplement
     */
    public function __construct(
        string $name,
        string $phone,
        int $customerSince,
        string $addressStreet,
        string $addressNeighbourhood,
        int $addressNumber,
        string $addressComplement
    ) {
        $this->name = $name;
        $this->phone = $phone;
        $this->customerSince = $customerSince;
        $this->addressStreet = $addressStreet;
        $this->addressNeighbourhood = $addressNeighbourhood;
        $this->addressNumber = $addressNumber;
        $this->addressComplement = $addressComplement;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getCustomerSince(): int
    {
        return $this->customerSince;
    }

    /**
     * @param int $customerSince
     */
    public function setCustomerSince(int $customerSince): void
    {
        $this->customerSince = $customerSince;
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

    public function getFullAddress(): string
    {
        return "
            {$this->addressStreet}, 
            {$this->addressNumber},
            {$this->addressNeighbourhood},
            {$this->addressComplement}
        ";
    }
}