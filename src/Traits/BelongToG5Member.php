<?php

namespace SilNex\GuLa\Traits;

use SilNex\GuLa\Models\Gnu\G5Member;

trait BelongToG5Member
{
    public function g5Member()
    {
        return $this->belongsTo(G5Member::class, $this->g5MemberForeignKey ?? 'mb_id', 'mb_id');
    }
}