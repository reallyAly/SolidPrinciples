<?php

declare(strict_types=1);

interface DatabaseInterface
{
    /**
     * @return void
     */
    public function insert(): void;

    /**
     * @return void
     */
    public function update(): void;

    /**
     * @return void
     */
    public function delete(): void;
}