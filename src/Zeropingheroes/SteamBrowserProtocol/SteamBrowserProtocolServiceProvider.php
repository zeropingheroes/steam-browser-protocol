<?php namespace Zeropingheroes\SteamBrowserProtocol;

use Illuminate\Support\ServiceProvider;

class SteamBrowserProtocolServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('zeropingheroes/steam-browser-protocol');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['SteamBrowserProtocol'] = $this->app->share(function($app)
		{
			return new SteamBrowserProtocol;
		});
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('SteamBrowserProtocol'   ,'Zeropingheroes\SteamBrowserProtocol\Facades\SteamBrowserProtocol');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}