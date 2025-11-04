<?php

namespace Apack\DummyPackage;

use Apack\DummyPackage\Commands\DummyPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
