@extends('layouts.app')

@section('content')

<h2>✅ Tugas Selesai</h2>

@foreach($tasks as $task)

<div class="card p-4 mb-4">

<h4>

{{ $task->title }}

</h4>

<p>

{{ $task->description }}

</p>

<p>

Deadline :

{{ $task->due_date }}

</p>

<span class="badge bg-success">

Selesai

</span>

</div>

@endforeach

@endsection