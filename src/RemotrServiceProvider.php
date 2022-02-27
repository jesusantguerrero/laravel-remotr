<?php

namespace Insane\Remotr;

use Illuminate\Support\ServiceProvider;
use Insane\Remotr\Console\SetupCommand;

class RemotrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupCommand::class,
            ]);
        }
    }
}
