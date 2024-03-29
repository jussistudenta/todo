<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index', ['tasks' =>
            Task::with('user')->whereBelongsTo(auth()->user())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $request->user()->tasks()->create($validated);

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     */
    // public function show(Task $task)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task->update($validated);
        $task->save();

        return redirect(route('tasks.index'));
    }

    public function confirmDelete(Task $task) {
        return view('tasks.confirm_delete', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect('tasks');
    }
}
