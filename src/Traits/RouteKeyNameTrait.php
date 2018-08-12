<?php
namespace Kolpikov\Packages\Traits;

use Illuminate\Support\Facades\Route;

trait RouteKeyNameTrait
{
    public function getRouteKeyName()
    {
        return (self::checkIfAdmin()) ? 'id': 'url';
    }
}