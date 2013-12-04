<?php namespace Zeropingheroes\SteamBrowserProtocol\Facades;

use Illuminate\Support\Facades\Facade;

class SteamBrowserProtocol extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'SteamBrowserProtocol'; }

}