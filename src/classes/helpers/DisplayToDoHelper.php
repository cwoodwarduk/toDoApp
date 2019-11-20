<?php

namespace ToDoApp\helpers;

use ToDoApp\entities\ToDoEntity;

class DisplayToDoHelper
{
    public static function displayToDos($data){
        $output = '';
        foreach ($data as $toDo){
            $id = $toDo['id'];
            $name = $toDo['name'];
            $completed = $toDo['completed'];
            $deleted = $toDo['deleted'];
            if ($completed == 0 && $deleted == 0){
                $output .="<div class='story'>
                            <h2>No." . $id . ": " . $name . "</h2>
                            <div class='options'>
                            
                            <div class='editSection'>
                            <input class='editButton button' type='submit' value='edit'>
                            <form class='editSumbit' action='/update' method='post'>
                                <input class='edit' name='name' type='text'>
                                <input name='id' value='" . $id . "' type='hidden'>
                                <input class='submitEdit' type='submit' value='submit'>
                            </form>
                            </div>
                            
                            <form action='/completed' method='post'>
                                <input name='id' value='" . $id . "' type='hidden'>
                                <input class='button' type='submit' name='completed' value='mark completed'>
                            </form>
                            
                            <form action='/delete' method='post'>
                                <input name='id' value='" . $id . "' type='hidden'>
                                <input class='button' type='submit' name='delete' value='delete'>
                            </form>
                            </div>
                            </div>";
            }
        }
        return $output;
    }
}