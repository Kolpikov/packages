<?php

namespace Kolpikov\Packages\Traits;

use Kolpikov\Packages\Scopes\Published as PublishedScope;

trait PublishedTrait
{
    /**
     * Boot the published trait for a model.
     *
     * @return void
     */
    public static function bootPublishedTrait()
    {
        if (!self::checkIfAdmin()) {
            static::addGlobalScope(new PublishedScope);
        }
    }
}