<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&display=swap');

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: 'Audiowide', cursive;
        }
        .landing-container {
            max-width: 700px;
            padding: 30px;
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 5px solid #b0b0b0;
            box-shadow: 10px 10px 0 #a0a0a0;
            border-radius: 10px;
        }
        h1 {
            font-size: 34px;
            color: #333333;
            text-shadow: 3px 3px 0px #bbbbbb;
        }
        p {
            font-size: 20px;
            color: #444444;
        }
        .btn {
            font-size: 18px;
            padding: 12px 20px;
            border: 3px solid #666666;
            box-shadow: 6px 6px 0 #999999;
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
            box-shadow: 3px 3px 0 #666666;
            transform: translate(3px, 3px);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
</head>
<body>
    <div class="landing-container">
        <h1>To-Do List</h1>
        <p>Kelola tugas harianmu dengan cara yang lebih santai tapi tetap produktif 🚀</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>
</body>
</html>
