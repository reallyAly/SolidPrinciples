<?php

declare(strict_types=1);

/**
 * WaterWay Shipping
 */
class WaterWayShipping extends AbstractShipping
{
    /**
     * @inheritDoc
     */
    public function getCost(Order $order): float
    {
        if ($order->getTotal() > 200) {
            return 0.0;
        }

        return max(20, $this->totalWeight * 2.5);
    }
}