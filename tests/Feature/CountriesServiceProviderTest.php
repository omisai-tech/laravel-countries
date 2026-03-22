<?php

use Omisai\Countries\Collection;
use Omisai\Laravel\Countries\Facades\Countries;

it('registers the countries collection as a singleton', function (): void {
    $resolved = app(Collection::class);

    expect($resolved)
        ->toBeInstanceOf(Collection::class)
        ->and(app(Collection::class))
        ->toBe($resolved)
        ->and(app('countries'))
        ->toBe($resolved);
});

it('exposes the collection through the facade', function (): void {
    expect(Countries::getFacadeRoot())
        ->toBe(app(Collection::class))
        ->and(Countries::getCountriesName())
        ->toBeArray()
        ->toHaveKey('US');
});
