<?php
namespace Kolpikov\Packages\Traits;

use Illuminate\Support\Facades\Request;

/**
 * Trait CheckAdminRouteTrait
 * @package Kolpikov\Packages\Traits
 */
trait CheckAdminRouteTrait
{
    /**
     * Returns true if in Admin route
     *
     * @return bool
     */
    public static function checkIfAdmin(): bool
    {
        if ( \Config::get('admin.root_prefix', false) === true
            || (Request::segment(1) === \Config::get('admin.prefix', 'admin'))
        ) {
            return true;
        }

        return false;
    }
}
