<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

abstract class G5Model extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    private function setTable()
    {
        // 
    }
}