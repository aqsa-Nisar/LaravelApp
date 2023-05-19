<?php

namespace App\Providers;

use App\Interfaces\AuthorRepositoryInterface;
use App\Repositories\AuthorRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() 
{
    $this->app->bind(AuthorRepositoryInterface::class, AuthorRepository::class);
 }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
