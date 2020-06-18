<?php

namespace SilNex\GuLa\Tests;

use SilNex\GuLa\G5ModelFactory;
use Illuminate\Support\Str;

class G5ModelFactoryTest extends TestCase
{
    public function test_g5model_factory()
    {
        $G5WriteEvent = new G5ModelFactory(['gula', 'g5_write_event']);

        $this->assertTrue($G5WriteEvent->count() > 0);
    }

    public function test_g5model_auto()
    {
        $notExistsModel = "\SilNex\GuLa\Gnu\G5WriteEvent";

        if (!class_exists($notExistsModel)) {
            $model = explode('\\', $notExistsModel);
            $table = Str::snake(end($model));
            
            $G5WriteEvent = new G5ModelFactory(['gula', $table]);

            $this->assertTrue($G5WriteEvent->count() > 0);
        }
    }
}