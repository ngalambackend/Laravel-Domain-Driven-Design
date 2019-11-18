<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DDDServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->repositories();
    }

    /**
     * Register all repositories service
     */
    private function repositories()
    {
        $this->app->bind('App\Domain\UserReview\UserReviewRepositoryInterface', 'App\Infrastructure\Data\Persistence\DbUserReviewRepository');
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
