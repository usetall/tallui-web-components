<?php

namespace Usetall\TalluiWebComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Usetall\TalluiWebComponents\Commands\TalluiWebComponentsCommand;

class TalluiWebComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tallui-web-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tallui_web_components_table')
            ->hasCommand(TalluiWebComponentsCommand::class);
    }
}
