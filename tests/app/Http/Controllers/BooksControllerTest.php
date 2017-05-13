<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class BooksControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testStatusCodeShouldBe200()
    {
        $this->get('/books')->seeStatusCode(200);
    }

    public function testShouldReturnCollectionOfRecords()
    {
        $this
            ->get('/books')
            ->seeJson([
                'title' => 'War of the Worlds',
            ])
            ->seeJson(([
                'title' => 'A Wrinkle in Time',
            ]));
    }
}
