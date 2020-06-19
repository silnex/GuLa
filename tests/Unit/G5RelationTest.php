<?php

namespace SilNex\GuLa\Tests;

use SilNex\GuLa\Models\Gnu\G5Member;

class G5RealtionTest extends TestCase
{
    public function test_g5member_relation()
    {
        $g5Member = new G5Member;

        $admin = $g5Member->where('mb_id', '=', 'admin')->first();

        $admin->g5Points()->first();

        $this->assertTrue(true);
    }
}