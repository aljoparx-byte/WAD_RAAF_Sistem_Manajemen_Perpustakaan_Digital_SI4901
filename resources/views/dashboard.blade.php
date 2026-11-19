<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Digital Library</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; padding: 40px; }
        .container { max-width: 700px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 20px; }
        .menu { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .menu a { display: block; text-align: center; padding: 20px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 6px; font-weight: bold; }
        .menu a:hover { background: #1d4ed8; }
        .btn-logout { background: #dc2626; color: #fff; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <h2 style="margin:0;">Digital Library</h2>
            <small>Halo, <b>{{ auth()->user()->name }}</b>!</small>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>

    <div class="menu">
        <a href="/penerbit">Modul Penerbit (Aldo)</a>
        <a href="/anggota">Modul Anggota & Kartu (Ayesha)</a>
        <a href="/buku">Modul Katalog Buku (Nauval)</a>
        <a href="/pengaduan">Modul Pengaduan (Bagas)</a>
    </div>
</div>
</body>
</html>