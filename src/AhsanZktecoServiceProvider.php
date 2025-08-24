<?php

namespace Ahsan\AhsanZkteco;

use Ahsan\AhsanZkteco\Commands\AhsanZktecoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AhsanZktecoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ahsan-zkteco')
            ->hasConfigFile();
        // ->hasViews()
        // ->hasMigration('create_ahsan-zkteco_table')
        // ->hasCommand(AhsanZktecoCommand::class);
    }
}
