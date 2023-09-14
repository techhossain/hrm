<?php

namespace App\Providers;

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
        View::composer(['admin.template.master'], function($view){
            $user = auth()->user();
            $helpers = \App\Helpers\Helpers::instance();
            $media_url = $helpers->user_photo_url($user, 'dp');

            $view->with('media_url',  $media_url);
        });
    }
}
