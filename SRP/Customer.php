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

    /**
     * @var Address[]
     */
    private array $addresses;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     * @return Customer
     */
    public function setAddresses(array $addresses): Customer
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @param Address $address
     * @return $this
     */
    public function addAddress(Address $address): Customer
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * @param string $name
     * @return Customer
     */
    public function setName(string $name): Customer
    {
        $this->name = $name;
        return $this;
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
     * @return $this
     */
    public function setPhone(string $phone): Customer
    {
        $this->phone = $phone;
        return $this;
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
     * @return $this
     */
    public function setCustomerSince(int $customerSince): Customer
    {
        $this->customerSince = $customerSince;
        return $this;
    }
}