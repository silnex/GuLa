<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Database\Eloquent\Model;
use SilNex\GuLa\Models\Gnu\G5Member;

class G5ModelTest extends TestCase
{
    public function test_connection_change()
    {
        $g5Member = new G5Member;
        $dummy = new DummyModel;
        $this->assertNotSame($g5Member->getConnectionName(), $dummy->getConnectionName());
    }

    public function test_connection_test()
    {
        $g5Member = new G5Member();
        $g5Member->all();
        
        $this->assertTrue(true);
    }
}

class DummyModel extends Model
{
}
