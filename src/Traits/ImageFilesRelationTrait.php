<?php

namespace App\Http\Traits;

trait ImageFilesRelationTrait
{
    public function images()
    {
        return $this->morphMany('App\Orm\Image', 'model');
    }
}
