@extends('layouts.app')

@section('content')

<h2 class="mb-4">
📊 Laporan Tugas
</h2>

<div class="card p-4">

<table class="table table-bordered">

<tr>

<th>
Tanggal
</th>

<th>
Jumlah Tugas
</th>

</tr>

@foreach($reports as $report)

<tr>

<td>

{{ $report->due_date }}

</td>

<td>

{{ $report->total }}

</td>

</tr>

@endforeach

</table>

</div>

@endsection