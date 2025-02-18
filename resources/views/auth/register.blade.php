<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Press Start 2P', cursive;
        }
        .container {
            max-width: 500px;
            padding: 20px;
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 4px solid #b0b0b0;
            box-shadow: 8px 8px 0 #a0a0a0;
            border-radius: 8px;
            text-align: center;
        }
        h2 {
            color: #333;
            text-shadow: 2px 2px 0px #bbbbbb;
        }
        .btn {
            font-size: 14px;
            border: 3px solid #666;
            box-shadow: 5px 5px 0 #999;
            text-transform: uppercase;
            transition: all 0.2s;
        }
        .btn-primary {
            background-color: #4caf50;
            color: #fff;
        }
        .btn:hover {
            box-shadow: 2px 2px 0 #666;
            transform: translate(3px, 3px);
        }
        input {
            border: 3px solid #666;
            box-shadow: 3px 3px 0 #999;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Form Registrasi</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Daftar</button>
            <p class="mt-3">Sudah punya akun? <a href="/login">Login</a></p>
        </form>
    </div>
</body>

</html>
