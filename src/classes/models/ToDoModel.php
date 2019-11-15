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
        $query = $this->db->prepare('SELECT `id`, `name`, `completed`, `deleted` FROM `toDos`;');
        $query->execute();
        $results = $query->fetchAll();
        return $results;
    }

    public function addToDo($name)
    {
        $query = $this->db->prepare('INSERT INTO `toDos` (`name`, `completed`, `deleted`) VALUES (:name, 0, 0);');
        $query->bindParam(':name', $name);
        return $query->execute();
    }

    public function completeToDo($id)
    {
        $query = $this->db->prepare('UPDATE `toDos` SET `completed` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function deleteToDo($id)
    {
        $query = $this->db->prepare('UPDATE `toDos` SET `deleted` = 1 WHERE `id` = :id;');
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function updateToDo($id, $name)
    {
        $query = $this->db->prepare('UPDATE `toDos` SET `name` = :name WHERE `id` = :id;');
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        return $query->execute();
    }
}