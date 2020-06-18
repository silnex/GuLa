<?php

namespace SilNex\GuLa\Tests;

use SilNex\GuLa\G5ModelFactory;

class G5ModelFactoryTest extends TestCase
{
    public function test_g5model_factory()
    {
        $G5WriteEvent = new G5ModelFactory(['gula', 'g5_write_event']);

        $this->assertTrue($G5WriteEvent->count() > 0);
    }
}