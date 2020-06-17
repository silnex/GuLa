<?php

namespace SilNex\GuLa\Tests;

use SilNex\GuLa\Models\Gnu\G5Model;

class G5ModelTest extends TestCase
{
    public function test_set_table(): void
    {
        $g5Model = new G5Model();
        $g5Model->setTable();

        $this->assertSame('G5Model', $g5Model->getTable());
    }
}
