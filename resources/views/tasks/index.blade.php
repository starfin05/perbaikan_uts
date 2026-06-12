@extends('layouts.app')

@section('content')

<h2 class="mb-4">📋 Daftar Tugas</h2>

<div class="card p-4">

<table class="table table-bordered table-hover">

<tr>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Tanggal</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

@foreach($tasks as $task)

<tr>

<td>{{ $task->title }}</td>

<td>{{ $task->description }}</td>

<td>{{ $task->due_date }}</td>

<td>

@if($task->completed)

<span class="badge bg-success">
    ✅ Selesai
</span>

@else

<span class="badge bg-warning">
    ⏳ Belum
</span>

@endif

</td>

<td>

@if(!$task->completed)

<a href="/tasks/{{$task->id}}/edit"
class="btn btn-warning">
✏️ Edit
</a>

<form action="/tasks/{{$task->id}}/complete"
method="POST"
class="d-inline">

@csrf
@method('PUT')

<button class="btn btn-success">
✅ Selesai
</button>

</form>

<form action="/tasks/{{$task->id}}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">
🗑️ Hapus
</button>

</form>

@endif

</td>

</tr>

@endforeach

</table>

</div>

@endsection