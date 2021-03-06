<?php

namespace App\Providers;

use App\Repositories\BookRepositoryImpl;
use App\Repositories\BookRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryBindServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BookRepositoryInterface::class, BookRepositoryImpl::class);
    }
}
