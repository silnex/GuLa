<?php

namespace SilNex\GuLa;

use Illuminate\Database\Eloquent\Model;

class G5Model extends Model
{
    public $timestamps = false;

    protected $connection = 'gula';
}