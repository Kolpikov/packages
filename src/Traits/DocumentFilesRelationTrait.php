<?php

namespace Kolpikov\Packages\Traits;

trait DocumentFilesRelationTrait
{

    public function documents()
    {
        return $this->morphMany('App\Orm\Document', 'model');
    }
}
