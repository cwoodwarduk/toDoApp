<?php
namespace ToDoApp\models;

class ToDoModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllToDos()
    {
        $query = $this->db->prepare('SELECT `id`, `name`, `completed` FROM `toDos`;');
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }

    public function addToDo($name)
    {
        $query = $this->db->prepare('INSERT INTO `toDos` (`name`, `completed`) VALUES (:name, 0);');
        $query->bindParam(':name', $name);
        return $query->execute();
    }
}