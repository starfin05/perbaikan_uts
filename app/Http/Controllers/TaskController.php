<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan semua tugas
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    // Menampilkan form tambah tugas
    public function create()
    {
        return view('tasks.create');
    }

    // Menyimpan tugas baru
    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date
        ]);

        return redirect('/tasks');
    }

    // Menampilkan form edit
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Memperbarui tugas
    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date
        ]);

        return redirect('/tasks');
    }

    // Menandai tugas selesai
    public function complete(Task $task)
    {
        $task->completed = true;
        $task->completed_at = now();
        $task->save();

        return redirect('/tasks');
    }

    // Menghapus tugas yang belum selesai
    public function destroy(Task $task)
    {
        if (!$task->completed) {
            $task->delete();
        }

        return redirect('/tasks');
    }

    // Menampilkan daftar tugas yang selesai
    public function completed()
    {
        $tasks = Task::where('completed', true)->get();

        return view('tasks.completed', compact('tasks'));
    }

    // Menampilkan laporan
    public function report()
    {
        $reports = Task::selectRaw(
                'due_date,
                COUNT(*) as total,
                SUM(CASE WHEN completed = 1 THEN 1 ELSE 0 END) as selesai,
                SUM(CASE WHEN completed = 0 THEN 1 ELSE 0 END) as belum'
            )
            ->groupBy('due_date')
            ->orderBy('due_date')
            ->get();

        $totalTask = Task::count();
        $totalSelesai = Task::where('completed', true)->count();
        $totalBelum = Task::where('completed', false)->count();

        return view(
            'tasks.report',
            compact(
                'reports',
                'totalTask',
                'totalSelesai',
                'totalBelum'
            )
        );
    }
}