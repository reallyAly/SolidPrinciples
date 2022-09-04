<?php

declare(strict_types=1);

/**
 * CombustionEngine Interface
 */
interface CombustionEngineInterface
{
    /**
     * Fuel the car
     *
     * @return void
     */
    public function toFuel(): void;
}