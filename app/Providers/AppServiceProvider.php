<?php

namespace App\Providers;

use App\Repositories\ConcessionRepository;
use App\Repositories\Contracts\ConcessionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ConcessionRepositoryInterface::class, ConcessionRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
