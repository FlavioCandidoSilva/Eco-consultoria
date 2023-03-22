<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        $task = Task::orderBy('priority', 'asc')->get();

        return view('tasks.task', compact('task'));
    }

    public function createTask()
    {
        $task = Task::all();

        return view('forms.taskForm', compact('task'));
    }

    public function storeTask(Request $request)
    {
 

        if (!Task::create($request->all())) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        // dd($request->all());

        return redirect()->route('home')->with('success', 'Tarefa cadastrada com sucesso!');
    }

    public function editTask($id)
    {
        $task = Task::findOrFail($id);
        return view('forms.taskEdit', compact('task'));
    }

    public function updateTask(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        if (!$task->update($request->all())) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Tarefa atualizada com sucesso!');
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);

        if (!$task->delete()) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Tarefa excluída com sucesso!');
    }
}
