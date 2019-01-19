<?php

namespace Blok\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Blok\Modules\Contracts\RepositoryInterface;
use Blok\Modules\Laravel\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
