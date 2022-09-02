<?php

declare(strict_types=1);

/**
 * AirShipping class
 */
class AirShipping extends AbstractShipping
{
    /**
     * @inheritDoc
     */
    public function getCost(Order $order): float
    {
        if ($order->getTotal() > 100) {
            return 0.0;
        }

        return max(10, $this->totalWeight * 1.5);
    }
}