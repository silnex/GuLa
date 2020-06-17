<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5Model extends Model
{
    protected $guard = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable();
    }

    public function setTable($table = null)
    {
        if ($table) {
            parent::setTable($table);
        } else {
            $this->table = (new \ReflectionClass($this))->getShortName();
        }
    }
}