<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/3/17
 * Time: 1:54 AM
 */
class BooksTableSeeder extends Seeder
{
    public function run() {
        DB::table('books')->insert([
            'title' => 'War of the Worlds',
            'description' => 'A science fiction masterpiece about Martians invading London',
            'author' => 'H. G. Wells',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('books')->insert([
            'title' => 'A Wrinkle in Time',
            'description' => 'A young girl goes on a mission to save her father who has 
                gone missing after working on a mysterious project called a tesseract.',
            'author' => 'Madeleine L\'Engle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}