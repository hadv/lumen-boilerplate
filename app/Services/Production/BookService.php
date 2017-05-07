<?php
/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/8/17
 * Time: 12:05 AM
 */

namespace App\Services\Production;

use App\Repositories\BookRepositoryInterface;
use App\Services\BookServiceInterface;
use Illuminate\Support\Facades\DB;

class BookService extends BaseService implements BookServiceInterface
{
    /** @var  \App\Repositories\BookRepositoryInterface BookRepository */
    protected $bookRepository;
    /**
     * BookService constructor.
     */
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAllBooks()
    {
        $books = $this->bookRepository->all();
        return $books;
    }
}