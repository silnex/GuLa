<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Database\Eloquent\Model;
use SilNex\GuLa\Models\Gnu\G5Member;

class G5ModelTest extends TestCase
{
    public function test_connection_change()
    {
        $g5Member = new G5Member;
        dd($g5Member->all());
        $dummy = new DummyModel;
        dd($dummy->getConnectionName());
    }
}

class DummyModel extends Model
{
}
