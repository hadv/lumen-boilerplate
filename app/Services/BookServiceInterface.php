<?php
namespace App\Services;
/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/7/17
 * Time: 11:54 PM
 */
interface BookServiceInterface extends BaseServiceInterface
{
    public function getAllBooks();
}