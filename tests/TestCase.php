<?php

namespace SilNex\GuLa\Tests;

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
