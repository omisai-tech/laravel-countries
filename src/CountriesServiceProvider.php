<?php

namespace Omisai\Laravel\Countries;

use Illuminate\Support\ServiceProvider;
use Omisai\Countries\Collection;

class CountriesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Collection::class, static fn (): Collection => new Collection);

        $this->app->alias(Collection::class, 'countries');
    }
}
