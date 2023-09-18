<?php

namespace LowB\LadminSimpleTheme;

use LowB\LadminSimpleTheme\Commands\LadminSimpleThemeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LadminSimpleThemeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ladmin-simple-theme')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ladmin-simple-theme_table')
            ->hasCommand(LadminSimpleThemeCommand::class);
    }
}
