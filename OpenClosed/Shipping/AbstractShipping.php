<?php

declare(strict_types=1);

/**
 * Shipping Interface
 */
abstract class AbstractShipping
{
    /**@var float */
    protected float $shippingCost;

    /**@var string */
    protected string $shippingType;

    /**@var string */
    protected string $shippingDate;

    /** @var float */
    protected float $totalWeight;

    /**
     * Method to calculate and return cost
     *
     * @param Order $order
     * @return float
     */
    public abstract function getCost(Order $order): float;

    /**
     * @return string
     */
    public function getShippingType(): string
    {
        return $this->shippingType;
    }

    /**
     * @param string $shippingType
     * @return $this
     */
    public function setShippingType(string $shippingType): AbstractShipping
    {
        $this->shippingType = $shippingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingDate(): string
    {
        return $this->shippingDate;
    }

    /**
     * @param string $shippingDate
     * @return $this
     */
    public function setShippingDate(string $shippingDate): AbstractShipping
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }


    /**
     * @param float $totalWeight
     * @return $this
     */
    public function setTotalWeight(float $totalWeight): AbstractShipping
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }
}