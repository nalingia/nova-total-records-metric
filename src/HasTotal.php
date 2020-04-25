<?php

namespace Nalingia\TotalRecords;

use Illuminate\Database\Eloquent\Builder;

trait HasTotal {
    public function component()
    {
        return 'nalingia-total-records';
    }

    public function total($request, $model, $column = null) {
        $column = $column ?? 'id';
        $query = $model instanceof Builder ? $model : (new $model)->newQuery();
        return $this->result(
            with(clone $query)->count($column)
        );
    }
}