<?php

declare(strict_types=1);

/**
 * Car Interface
 */
interface CarInterface
{
    /**
     * Fuel the car
     *
     * @return void
     */
    public function toFuel(): void;

    /**
     * Recharge the battery
     *
     * @return void
     */
    public function recharge(): void;
}