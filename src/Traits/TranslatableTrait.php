<?php

namespace Kolpikov\Packages\Traits;

trait TranslatableTrait
{
    public function scopeGetTranslation($query, $languageId = 1)
    {
        return $query->where('language_id', '=', $languageId);
    }
}