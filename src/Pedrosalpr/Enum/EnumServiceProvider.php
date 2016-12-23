<?php
namespace Pedrosalpr\Enum;

use Pedrosalpr\Enum\Data\DummyEnum;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
class EnumServiceProvider extends LaravelServiceProvider {
  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    // Nothing here
  }
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app->singleton('command.make.enum', function ($app) {
      return $app['Pedrosalpr\Enum\Commands\MakeEnumCommand'];
    });
    $this->app->bindIf('Enum', function () {
      return new Enum(DummyEnum::class);
    });
    $this->commands('command.make.enum');
  }
  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    // Nothing here
  }
}