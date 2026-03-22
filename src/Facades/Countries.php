<?php

namespace Omisai\Laravel\Countries\Facades;

use Illuminate\Support\Facades\Facade;
use Omisai\Countries\Collection;

/**
 * @see Collection
 */
class Countries extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Collection::class;
    }
}
