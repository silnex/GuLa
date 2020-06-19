<?php

namespace SilNex\GuLa\Tests;

use SilNex\GuLa\Models\Gnu\G5Member;

class G5MemberWriteTableTest extends TestCase
{
    public function test_g5member_write_table_auto_relation_test()
    {
        $notExistsModel = "\SilNex\GuLa\Gnu\G5WriteEvent";
        $this->assertFalse(class_exists($notExistsModel));

        $g5Member = new G5Member;
        $admin = $g5Member->where('mb_id', '=', 'admin')->first();
        $admin->g5WriteEvent()->first();
        $this->assertTrue(true);
    }
}
