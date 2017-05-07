<?php
/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/8/17
 * Time: 12:31 AM
 */

namespace App\Repositories;


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