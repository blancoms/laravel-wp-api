<?php namespace Blancoms\LaravelWpApi\Facades;

use Illuminate\Support\Facades\Facade;
use Blancoms\LaravelWpApi\WpApi as WordpressApi;

class WpApi extends Facade {

    protected static function getFacadeAccessor() { return WordpressApi::class; }

}
