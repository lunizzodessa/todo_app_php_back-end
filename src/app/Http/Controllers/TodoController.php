<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function show(Request $request)
    {
//        $todos = TodoItem::all();
//        echo "<pre>";
//        var_dump($todos);
//        echo "</pre>";


        return view('todo-list');
    }

    // This is the method that will be called when the user submits the form in the todo-list.blade.php view

    // Add a test for this method
    // add a related test into tests/Feature/TodoControllerTest.php
    // Copilot didn't generate the file (was generated manually)
    // but then helped to add a test cases for this method
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $todoItem = new TodoItem();
        $todoItem->name = $request->get("name");
        $todoItem->save();

        return redirect("/todo");
    }

    // Hard delete a todo item from the database
    public function delete(int $id)
    {
        var_dump($id);
        return "Delete";
    }

    // Add a field complete to the todo_items table and entity
    // My note: after adding a comment above Copilot
    // has helped to add a related field into the db migration
    public function complete(int $id)
    {
        var_dump($id);
        return "Complete";
    }
}
