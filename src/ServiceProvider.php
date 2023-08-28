<?php

namespace ConvertingToSqlite;

use ConvertingToSqlite\Commands\ConvertCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Foundation\Console\AboutCommand;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        if (class_exists(AboutCommand::class)) {
            AboutCommand::add('convert-db', function () {
                return ['Version' => '1.0.0'];
            });
        }

        if ($this->app->runningInConsole()) {
            $this->commands([
                ConvertCommand::class
            ]);
        }
    }
}
