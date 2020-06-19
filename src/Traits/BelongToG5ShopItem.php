<?php

namespace SilNex\GuLa\Traits;

use SilNex\GuLa\Models\Young\G5ShopItem;

trait BelongToG5ShopItem
{
    public function g5Member()
    {
        return $this->belongsTo(G5ShopItem::class, 'it_id', 'it_id');
    }
}