<?php

namespace App\Http\Controllers;

use App\Action\Todo\CreateTodoAction;
use App\DataTransferModel\Todo\TodoDTO;
use App\Models\ToDo\ToDo;
use App\Http\Requests\StoreToDoRequest;
use App\Http\Requests\UpdateToDoRequest;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreToDoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreToDoRequest $request, CreateTodoAction $createTodoAction)
    {
        $createTodoAction->execute(TodoDTO::fromRequest($request));

        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToDo\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function show(ToDo $toDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToDo\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateToDoRequest  $request
     * @param  \App\Models\ToDo\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateToDoRequest $request, ToDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToDo\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDo $toDo)
    {
        //
    }
}
