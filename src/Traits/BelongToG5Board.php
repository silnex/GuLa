<?php

namespace SilNex\GuLa\Traits;

use SilNex\GuLa\Models\Gnu\G5Board;

trait BelongToG5Board
{
    public function g5Board()
    {
        return $this->belongsTo(G5Board::class, 'bo_table', 'bo_table');
    }
}