<?php

namespace Kolpikov\Packages\Interfaces;

interface Translatable
{
    public function scopeGetTranslation($query, $languageId = 1);
}
