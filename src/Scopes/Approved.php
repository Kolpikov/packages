<?php

namespace Kolpikov\Packages\Scopes;

use Illuminate\Database\Eloquent\{
    Builder, Model, Scope
};

class Approved implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('approved', '=', 1);
    }
}