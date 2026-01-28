<?php

namespace QuadCompanies\GoogleAnalytics;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class GoogleAnalyticsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/google-analytics.php' => config_path('google-analytics.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'google-analytics');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/google-analytics'),
        ], 'views');

        Blade::directive('googleAnalytics', function ($expression) {
            return "<?php echo \QuadCompanies\GoogleAnalytics\GoogleAnalytics::render($expression); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/google-analytics.php', 'google-analytics'
        );
    }
}
