@extends('layouts.app')

@section('title', 'Riwayat To-Do List')

@section('header', '')

@section('content')
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            max-width: 800px;
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
        .btn-primary { background-color: #007bff; color: #fff; }
        .btn-danger { background-color: #dc3545; color: #fff; }
        .btn:hover {
            box-shadow: 2px 2px 0 #666;
            transform: translate(3px, 3px);
        }
        .table {
            border: 3px solid #666;
            box-shadow: 5px 5px 0 #999;
            background-color: #fff;
        }
    </style>

    <div class="container">
        <h2>Riwayat To-Do List</h2>
        <p>Berikut adalah semua tugas yang pernah Anda buat.</p>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Tanggal & Waktu Tugas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $index => $todolist)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $todolist->nama_tugas }}</td>
                        <td>
                            @if ($todolist->status_tugas == 'pending')
                                <span class="badge bg-warning">Pending</span>
                            @else
                                <span class="badge bg-success">Completed</span>
                            @endif
                        </td>
                        <td>{{ \Carbon\Carbon::parse($todolist->created_at)->translatedFormat('l, d F Y H:i:s') }} WIB</td>
                        <td>
                            <form action="{{ route('todolist.destroy', $todolist->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali ke Dashboard</a>
    </div>
@endsection
