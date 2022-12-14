<?php

namespace App\QueryFilters;
use Closure;

abstract class Filter
{
    public function handle($request, Closure $next)
    {
        if (!request()->has($this->filterName())) {
            return $next($request);
        }

        $builder = $next($request);
        return $this->applyFilter($builder);

        return $builder->where('active', request('active'));
    }

    protected abstract function applyFilter($builder);

    protected function filterName()
    {
        return str()->snake(class_basename($this));
    }
}
