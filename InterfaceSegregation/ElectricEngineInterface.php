<?php

declare(strict_types=1);

/**
 * ElectricEngineInterface Interface
 */
interface ElectricEngineInterface
{
    /**
     * Recharge the battery
     *
     * @return void
     */
    public function recharge(): void;
}