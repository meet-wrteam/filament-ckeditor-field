<?php

namespace Kahusoftware\FilamentCkeditorField\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use RyanChandler\BladeCaptureDirective\BladeCaptureDirectiveServiceProvider;
use Kahusoftware\FilamentCkeditorField\FilamentCkeditorFieldServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        // Fix for Laravel 11 compatibility: Ensure ViewErrorBag is properly initialized
        // This prevents Livewire from trying to put null MessageBag instances
        $errorBag = new ViewErrorBag();
        $errorBag->put('default', new MessageBag());
        view()->share('errors', $errorBag);
    }

    protected function getPackageProviders($app)
    {
        return [
            ActionsServiceProvider::class,
            BladeCaptureDirectiveServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            BladeIconsServiceProvider::class,
            // FilamentServiceProvider::class,
            FormsServiceProvider::class,
            InfolistsServiceProvider::class,
            LivewireServiceProvider::class,
            NotificationsServiceProvider::class,
            SupportServiceProvider::class,
            // TablesServiceProvider::class,
            // WidgetsServiceProvider::class,
            FilamentCkeditorFieldServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        
        // Set up app key for encryption (required for Livewire)
        config()->set('app.key', 'base64:' . base64_encode(
            \Illuminate\Support\Str::random(32)
        ));

        // Set up views path for test views
        $app['view']->addNamespace('test', __DIR__ . '/views');
    }
}
