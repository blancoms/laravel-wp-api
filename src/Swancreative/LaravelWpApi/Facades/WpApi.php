<?php namespace blancoms\LaravelWpApi\Facades;

use Illuminate\Support\Facades\Facade;
use blancoms\LaravelWpApi\WpApi as WordpressApi;

class WpApi extends Facade {

    protected static function getFacadeAccessor() { return WordpressApi::class; }

}
