<?php

namespace Horizom\EloquentFilter;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeFilter(Builder $query, FilterContract $filter)
    {
        return $filter->bind($query);
    }
}