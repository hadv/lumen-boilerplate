<?php
namespace App\Services;

/**
 * Interface BookServiceInterface
 * @package App\Services
 */
interface BookServiceInterface extends BaseServiceInterface
{
    /**
     * @return mixed
     */
    public function getAllBooks();
}