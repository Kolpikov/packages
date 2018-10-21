<?php

namespace App\Http\Traits;

trait DocumentFilesRelationTrait
{

    public function documents()
    {
        return $this->morphMany('App\Orm\Document', 'model');
    }
}
