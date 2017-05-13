<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

/**
 * Class BookRepositoryImpl.
 */
class BookRepositoryImpl extends BaseRepositoryImpl implements BookRepositoryInterface
{
    /**
     * Get All Books.
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
