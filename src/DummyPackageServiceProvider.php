<?php

namespace Apack\DummyPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Apack\DummyPackage\Commands\DummyPackageCommand;

class DummyPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dummy-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dummy_package_table')
            ->hasCommand(DummyPackageCommand::class);
    }
}
