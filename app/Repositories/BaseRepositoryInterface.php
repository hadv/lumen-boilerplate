<?php

namespace App\Repositories;

/**
 * Interface BaseRepositoryInterface
 * @package App\Repositories
 */
interface BaseRepositoryInterface
{
    /**
     * Get All Models.
     *
     * @param string $order
     * @param string $direction
     *
     * @return stdClass|array
     */
    public function all($order = null, $direction = null);
}