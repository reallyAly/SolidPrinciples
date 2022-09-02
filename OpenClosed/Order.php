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

    /** @var AbstractShipping */
    private AbstractShipping $shipping;

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
     * @return AbstractShipping
     */
    public function getShipping(): AbstractShipping
    {
        return $this->shipping;
    }

    /**
     * @param AbstractShipping $shipping
     */
    public function setShipping(AbstractShipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shipping->getCost($this);
    }
}