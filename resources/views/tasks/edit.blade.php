@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="card shadow border-0 rounded-4">

        <div class="card-header bg-warning text-dark">
            <h3>
                <i class="fa-solid fa-pen-to-square"></i>
                Edit Tugas
            </h3>
        </div>

        <div class="card-body">

            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        <i class="fa-solid fa-book"></i>
                        Judul Tugas
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        value="{{ $task->title }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        <i class="fa-solid fa-align-left"></i>
                        Deskripsi
                    </label>

                    <textarea
                        class="form-control"
                        rows="4"
                        name="description">{{ $task->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        <i class="fa-solid fa-calendar-days"></i>
                        Deadline
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        name="due_date"
                        value="{{ $task->due_date }}"
                        required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Update Tugas
                </button>

                <a href="/tasks" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection