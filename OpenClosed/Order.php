<?php

declare(strict_types=1);

/**
 * Order class
 */
class Order
{
    /** @var int */
    private int $orderId;

    /** @var float */
    private float $total;

    /**@var float */
    private float $shippingCost;

    /**@var string */
    private string $shippingType;

    /**@var string */
    private string $shippingDate;

    /** @var float */
    private float $totalWeight;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        switch($this->shippingType) {
            case "air":
                $this->shippingCost = max(10, $this->totalWeight * 1.5);
                break;

            case "waterway":
                $this->shippingCost = max(20, $this->totalWeight * 2.5);
                break;
        }

        return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     */
    public function setShippingCost(float $shippingCost): void
    {
        $this->shippingCost = $shippingCost;
    }

    /**
     * @return string
     */
    public function getShippingType(): string
    {
        return $this->shippingType;
    }

    /**
     * @param string $shippingType
     */
    public function setShippingType(string $shippingType): void
    {
        $this->shippingType = $shippingType;
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
     */
    public function setShippingDate(string $shippingDate): void
    {
        $this->shippingDate = $shippingDate;
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
     */
    public function setTotalWeight(float $totalWeight): void
    {
        $this->totalWeight = $totalWeight;
    }
}