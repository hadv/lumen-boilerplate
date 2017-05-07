<?php

namespace App\Http\Controllers;

use App\Services\BookServiceInterface;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class BooksController {

    /** @var  \App\Services\BookServiceInterface BookService */
    protected $bookService;

    /**
     * BooksController constructor.
     *
     * @param $bookService BookServiceInterface
     */
    public function __construct(BookServiceInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * GET /books
     * @return array
     */
    public function index() {
        $books = $this->bookService->getAllBooks();
        return response($books, Response::HTTP_OK)
            ->header('Content-Type', 'application/json');
    }

    /**
     * GET /books/{id}
     * @param integer $id
     * @return mixed
     */
    public function show($id) {
        $book = DB::table('books')->where('id', $id)->first();
        if (is_null($book)) {
            return response()
                ->json(['status' => 'error', 'message' => 'Book not found'], Response::HTTP_NOT_FOUND)
                ->header('Content-Type', 'application/json');
        }
        return response((array)$book, Response::HTTP_OK)
            ->header('Content-Type', 'application/json');
    }
}