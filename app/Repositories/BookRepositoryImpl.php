<?php
/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/8/17
 * Time: 12:37 AM
 */

namespace App\Repositories;


use Illuminate\Support\Facades\DB;

class BookRepositoryImpl extends BaseRepositoryImpl implements BookRepositoryInterface
{

    /**
     * Get All Models.
     *
     * @param string $order
     * @param string $direction
     *
     * @return stdClass|array
     */
    public function all($order = null, $direction = null)
    {
        return DB::table('books')->get();
    }
}