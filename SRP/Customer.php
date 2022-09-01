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
}