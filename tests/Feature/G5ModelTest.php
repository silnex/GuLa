<?php

namespace SilNex\GuLa\Tests;

use ReflectionClass;
use SilNex\GuLa\Models\Gnu\G5Model;

class G5ModelTest extends TestCase
{
    public function set_table_test(): void
    {
        $g5Model = new ReflectionClass(G5Model::class);
        $g5Model->setTable();
    }
}