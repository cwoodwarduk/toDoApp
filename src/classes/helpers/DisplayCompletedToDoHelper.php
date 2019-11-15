<?php


namespace ToDoApp\helpers;

use ToDoApp\entities\ToDoEntity;

class DisplayCompletedToDoHelper
{
    public static function displayCompletedToDos($data)
    {
        $output = '';
        foreach ($data as $toDo){
            $id = $toDo['id'];
            $name = $toDo['name'];
            $completed = $toDo['completed'];
            $deleted = $toDo['deleted'];
            if ($completed == 1 && $deleted == 0){
                $output .="<h2>You completed no." . $id . ": " . $name . ". Didn't you do well!</h2>
                        <form action='/delete' method='post'>
                            <input name='id' value='" . $id . "' type='hidden'>
                            <input class='button' type='submit' name='delete' value='delete'>
                        </form>";
            }
        }
        return $output;
    }
}