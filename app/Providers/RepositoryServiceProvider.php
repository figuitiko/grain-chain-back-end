<?php

namespace App\Providers;

use App\Repositories\Character\CharacterRepositoryInterface;
use App\Repositories\Character\EloquentCharacterRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public $bindings = [
        CharacterRepositoryInterface::class => EloquentCharacterRepository::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
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
