<?php

namespace Bilfeldt\RequestLogger;

use Bilfeldt\RequestLogger\Commands\RequestLoggerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RequestLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-request-logger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-request-logger_table')
            ->hasCommand(RequestLoggerCommand::class);
    }
}
