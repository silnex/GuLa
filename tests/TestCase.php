<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use SilNex\GuLa\GuLaServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }
    protected function getPackageProviders($app)
    {
        return [
            GuLaServiceProvider::class,
        ];
    }
}
