@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

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
        .btn-primary { background-color: #4caf50; color: #fff; }
        .btn-info { background-color: #17a2b8; color: #fff; }
        .btn-warning { background-color: #ffc107; color: #fff; }
        .btn-danger { background-color: #dc3545; color: #fff; }
        .btn:hover {
            box-shadow: 2px 2px 0 #666;
            transform: translate(3px, 3px);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 3px solid #666;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #bbb;
        }
    </style>
    
    <div class="container">
        <h3>Halo, <strong>{{ auth()->user()->name }}</strong></h3>
        <h4>Hari ini: <strong id="tanggal"></strong> | Waktu: <strong id="waktu"></strong></h4>
        <form action="{{ route('todolist.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="nama_tugas" class="form-control" placeholder="Tambahkan tugas baru" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
            <a href="{{ route('todolist.history') }}" class="btn btn-info mb-3">Lihat Riwayat To-Do List</a>
        </form>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $index => $todolist)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $todolist->nama_tugas }}</td>
                        <td>
                            <form action="{{ route('todolist.update', $todolist->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status_tugas" class="form-select" onchange="this.form.submit()">
                                    <option value="pending" {{ $todolist->status_tugas == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="completed" {{ $todolist->status_tugas == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('todolist.edit', $todolist->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('todolist.destroy', $todolist->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger mt-3">Logout</button>
        </form>
    </div>
    
    <script>
        function updateTime() {
            const waktuEl = document.getElementById('waktu');
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
            waktuEl.textContent = timeString;
        }
        function updateDate() {
            const tanggalEl = document.getElementById('tanggal');
            const now = new Date();
            const dateString = now.toLocaleDateString('id-ID', { weekday: 'long', day: '2-digit', month: 'long', year: 'numeric' });
            tanggalEl.textContent = dateString;
        }
        setInterval(updateTime, 1000);
        updateTime();
        updateDate();
    </script>
@endsection
