<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome Mahasiswa</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: #ffffff;
            width: 420px;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
        }

        .badge {
            display: inline-block;
            background-color: #22c55e;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 15px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background: #f3f4f6;
            margin: 8px 0;
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Selamat Datang,<br>Mahasiswa STMIK IKMI!</h1>

    <div class="badge">Mata Kuliah</div>

    <ul>
        @foreach ($mataKuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>

    <p style="margin-top:15px; font-size:13px; color:#666;">
        Halaman Laravel 12 dengan CSS sederhana
    </p>
</div>

</body>
</html>
