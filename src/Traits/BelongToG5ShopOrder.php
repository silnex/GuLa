<?php

namespace SilNex\GuLa\Traits;

use SilNex\GuLa\Models\Young\G5ShopOrder;

trait BelongToG5ShopOrder
{
    public function g5Member()
    {
        return $this->belongsTo(G5ShopOrder::class, 'od_id', 'od_id');
    }
}