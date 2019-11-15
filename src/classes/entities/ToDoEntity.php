<?php

namespace ToDoApp\entities;

use phpDocumentor\Reflection\Types\String_;

class ToDoEntity extends ValidationEntity implements \JsonSerializable
{
    protected $id;
    protected $name;
    protected $completed;
    protected $deleted;

    public function __construct(
        int $toDoId = null,
        string $toDoName = null,
        int $toDoCompleted = null,
        int $toDoDeleted = null
    )
    {
        $this->id = ($this->id ?? $toDoId);
        $this->name = ($this->name ?? $toDoName);
        $this->completed = ($this->completed ?? $toDoCompleted);
        $this->deleted = ($this->deleted ?? $toDoDeleted);

        $this->sanitiseData();
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'completed' => $this->completed,
            'deleted' => $this->deleted
        ];
    }

    private function sanitiseData()
    {
        $this->id = (int) $this->id;
        $this->name = self::sanitiseString($this->name);
        $this->completed = (int) $this->completed ? 1 : 0;
        $this->deleted = (int) $this->deleted ? 1 : 0;
    }
}