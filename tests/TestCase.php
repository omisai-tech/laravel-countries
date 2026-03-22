<?php

namespace Tests;

use Omisai\Laravel\Countries\CountriesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [CountriesServiceProvider::class];
    }
}
