<?php

declare(strict_types=1);

/**
 * BudgetReport class
 */
class BudgetReport
{
    /**
     * @var DatabaseInterface
     */
    private DatabaseInterface $database;

    /**
     * @return void
     */
    public function open(): void
    {
        // Do something to open a report
    }

    /**
     * @return void
     */
    public function save(): void
    {
        // Do something to save a new report
    }
}