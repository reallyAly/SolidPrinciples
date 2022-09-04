<?php

declare(strict_types=1);

/**
 * ReadOnlyDocument class
 */
class ReadOnlyDocument extends Document
{
    /**
     * Save method
     *
     * @throws Exception
     * @return void
     */
    public function save(): void
    {
        throw new Exception("You cannot save a read only document");
    }
}