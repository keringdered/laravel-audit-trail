<?php
/**
 * Created by PhpStorm.
 * User: techies
 * Date: 5/30/18
 * Time: 10:18 AM
 */
namespace LaravelAuditTrail;

use Illuminate\Support\ServiceProvider;

class LaravelAuditTrailServiceProvider extends ServiceProvider
{

/**
* Publishes configuration file.
*
* @return  void
*/
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel_audit_trail.php' => config_path('laravel_audit_trail.php'),
        ], 'laravel-audit-trail-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel_audit_trail.php',
            'laravel_audit_trail'
        );
    }
}