<?php

namespace App\Http\Controllers;

use App\Book;

class BooksController {
    /**
     * GET /books
     * @return array
     */
    public function index() {
//        return [
//            ['title' => 'War of the Worlds'],
//            ['title' => 'A Wrinkle in Time']
//        ];
        return Book::all();
    }
}