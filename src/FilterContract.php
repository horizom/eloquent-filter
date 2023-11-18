<?php

namespace Horizom\EloquentFilter;

use Illuminate\Database\Eloquent\Builder;

interface FilterContract
{
    /**
     * Demarrer le mecanisme de filtrage de la requete
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function bind(Builder $query);
}
