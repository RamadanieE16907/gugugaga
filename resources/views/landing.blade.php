<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: 'Press Start 2P', cursive;
        }
        .landing-container {
            max-width: 600px;
            padding: 20px;
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 4px solid #b0b0b0;
            box-shadow: 8px 8px 0 #a0a0a0;
            border-radius: 8px;
        }
        h1, p {
            color: #333333;
            text-shadow: 2px 2px 0px #bbbbbb;
        }
        .btn {
            font-size: 14px;
            border: 3px solid #666666;
            box-shadow: 5px 5px 0 #999999;
            text-transform: uppercase;
            transition: all 0.2s;
        }
        .btn-primary {
            background-color: #4caf50;
            color: #fff;
        }
        .btn-secondary {
            background-color: #03a9f4;
            color: #fff;
        }
        .btn:hover {
            box-shadow: 2px 2px 0 #666666;
            transform: translate(3px, 3px);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="landing-container">
        <h1>To-Do List</h1>
        <p>Kelola tugas harian Anda dengan profesional dan efisien.</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>
</body>
</html>
