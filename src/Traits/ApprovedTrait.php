<?php

namespace Kolpikov\Packages\Traits;

use Kolpikov\Packages\Scopes\Approved as ApprovedScope;

trait ApprovedTrait
{
    /**
     * Boot the approved trait for a model.
     *
     * @return void
     */
    public static function bootPublished()
    {
        if (!self::checkIfAdmin()) {
            static::addGlobalScope(new ApprovedScope);
        }
    }
}