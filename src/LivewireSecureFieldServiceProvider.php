<?php

namespace Remeritus\LivewireSecureField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Remeritus\LivewireSecureField\Commands\LivewireSecureFieldCommand;

class LivewireSecureFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-secure-field')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-secure-field_table')
            ->hasCommand(LivewireSecureFieldCommand::class);
    }
}
