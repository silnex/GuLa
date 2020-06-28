<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class AutoGenerateG5WriteModels extends TestCase
{
    public function test_auto_generate_g5_models()
    {
        Artisan::call('g5model:write-all');
    }
}
