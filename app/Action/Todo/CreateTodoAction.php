<?php 

namespace App\Action\Todo;

use App\DataTransferModel\Todo\TodoDTO;
use App\Models\ToDo\ToDo;

class CreateTodoAction
{
    public function execute(TodoDTO $todoDTO)
    {
        $todo = new ToDo();
        $todo->name = $todoDTO->name;
        $todo->description = $todoDTO->description;
        $todo->save();

        return $todo;
    }
}
