@extends('layouts.app')

@section('content')

<div class="card p-5">

<h2>➕ Tambah Tugas</h2>

<form action="/tasks" method="POST">

@csrf

<div class="mb-3">

<label>Judul</label>

<input type="text"
name="title"
class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="description"
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Tanggal</label>

<input type="date"
name="due_date"
class="form-control">

</div>

<button class="btn btn-primary">

💾 Simpan

</button>

</form>

</div>

@endsection