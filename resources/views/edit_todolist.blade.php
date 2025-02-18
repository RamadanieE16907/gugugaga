@extends('layouts.app')

@section('title', 'Edit To-Do List')

@section('header', '')

@section('content')
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            max-width: 600px;
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 4px solid #b0b0b0;
            box-shadow: 8px 8px 0 #a0a0a0;
            border-radius: 8px;
            padding: 20px;
            margin: auto;
        }
        .btn {
            font-size: 14px;
            border: 3px solid #666;
            box-shadow: 5px 5px 0 #999;
            text-transform: uppercase;
            transition: all 0.2s;
        }
        .btn-success { background-color: #4caf50; color: #fff; }
        .btn-secondary { background-color: #6c757d; color: #fff; }
        .btn:hover {
            box-shadow: 2px 2px 0 #666;
            transform: translate(3px, 3px);
        }
    </style>

    <div class="container">
        <h2>Edit To-Do List</h2>
        <form action="{{ route('todolist.updateNama', $todolist->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="nama_tugas" class="form-label">Nama Tugas</label>
                <input type="text" name="nama_tugas" class="form-control" value="{{ $todolist->nama_tugas }}" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
