<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $task = Task::create([
           'name' => $request->name,
           'category_id' =>$request->category_id,
            'user_id' =>$request->user_id,
            'order' =>$request->order,
        ]);

        $data = [
            'data' => $task,
            'status' => (bool) $task,
            'message' => $task ? 'Task Created!' : 'Error Creating Task',
        ];

        return response()->json($data);

    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        //
    }

    public function update(Request $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }
}
