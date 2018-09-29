<?php
namespace Hogus\LaravelBilling\Facade;

use Illuminate\Support\Facades\Facade;

class Billing extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'billing';
    }
}
