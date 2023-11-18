<?php

namespace Horizom\EloquentFilter;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

abstract class Filter implements FilterContract
{
    /**
     * @var Collection
     */
    protected $filters;

    public function __construct(array $filters)
    {
        $this->filters = collect($filters);
    }

    public function bind(Builder $query)
    {
        return $query;
    }
}
