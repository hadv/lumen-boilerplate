<?php

namespace App\Services;

/**
 * Interface BookServiceInterface.
 */
interface BookServiceInterface extends BaseServiceInterface
{
    /**
     * @return mixed
     */
    public function getAllBooks();
}
