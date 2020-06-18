<?php

namespace SilNex\GuLa;

class G5ModelFactory extends G5Model
{
    protected $connection = null;
    protected $table = null;

    public function __construct(array $data)
    {
        $this->newConnection = $data[0] ?? $this->newConnection;
        $this->newTable = $data[1] ?? $this->newTable;
        $this->setConnection($this->newConnection);
        $this->setTable($this->newTable);
        parent::__construct([]);
    }

    public function newInstance($attributes = [], $exists = false)
    {
        $model = parent::newInstance($attributes, $exists);
        $model->setTable($this->table);

        return $model;
    }
}
