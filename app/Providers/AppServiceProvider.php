<?php

namespace App\Providers;

use App\Models\Menu;
use App\Settings\GeneralSettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        try {
            $generalSettings = new (GeneralSettings::class);

            View::share([
                'headerMenu' => Menu::with('links')->where('slug', 'header-menu')->first(),
                'settings' => $generalSettings
            ]);
        } catch (\Exception $e) {

        }


    }
}
