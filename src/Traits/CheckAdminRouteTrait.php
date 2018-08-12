<?php
namespace Kolpikov\Packages\Traits;

use Illuminate\Support\Facades\Request;

trait CheckAdminRouteTrait
{
    /**
     * Returns true if in Admin route
     *
     * @return bool
     */
    public static function checkIfAdmin()
    {
        return (Request::segment(1) == 'admin') ? true : false;
    }
}