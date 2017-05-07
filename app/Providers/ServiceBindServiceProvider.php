<?php
/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/8/17
 * Time: 12:14 AM
 */

namespace App\Providers;


use App\Services\BookServiceInterface;
use App\Services\Production\BookService;
use Illuminate\Support\ServiceProvider;

class ServiceBindServiceProvider extends ServiceProvider
{

    /**
     *
     */
    public function register() {
        $this->app->singleton(BookServiceInterface::class, BookService::class);
    }
}