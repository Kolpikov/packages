<?php

namespace Kolpikov\Packages\Traits;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletingScope;

trait SoftDeletesCustomTrait
{
    use SoftDeletes {
        SoftDeletes::bootSoftDeletes as parentBootSoftDeletes;
    }

    /**
     * Boot the soft deleting trait for a model.
     *
     * @return void
     */
    public static function bootSoftDeletes()
    {
        if (!self::checkIfAdmin()) {
            static::addGlobalScope(new SoftDeletingScope);
        }
    }

    /**
     * Updates Deleted Status for models
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function updateDisplayStatus(\Illuminate\Database\Eloquent\Model $model) {
        if ($model->trashed()) {
            $model->restore();
        } else {
            $model->delete();
        }
    }

    /**
     * Set Deleted Status for models by Seleted option
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param integer $isVisible
     */
    public function setDeleteStatus(\Illuminate\Database\Eloquent\Model $model, $isVisible = 1) {
        $trashed = $model->trashed();

        if (!$isVisible && !$trashed) {
            $model->delete();
        } elseif ($trashed) {
            $model->restore();
        }
    }
}