<!DOCTYPE html>
<html>
<head>
    <title>Task Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .navbar{
            background:#0d6efd;
        }

        .sidebar{
            width:240px;
            height:100vh;
            background:white;
            position:fixed;
            box-shadow:0 0 10px rgba(0,0,0,.1);
            padding-top:20px;
        }

        .sidebar a{
            display:block;
            padding:15px;
            text-decoration:none;
            color:black;
            border-radius:10px;
            margin:5px;
        }

        .sidebar a:hover{
            background:#0d6efd;
            color:white;
        }

        .content{
            margin-left:260px;
            padding:30px;
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <span class="navbar-brand fs-3">
            📋 Task Management System
        </span>
    </div>
</nav>

<div class="sidebar">

    <a href="/tasks">
        📋 Daftar Tugas
    </a>

    <a href="/tasks/create">
        ➕ Tambah Tugas
    </a>

    <a href="/completed">
        ✅ Tugas Selesai
    </a>

    <a href="/report">
        📊 Laporan
    </a>

</div>

<div class="content">

    @yield('content')

</div>

</body>
</html>