<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Digital Library</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 340px; }
        h2 { text-align: center; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin: 8px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #2563eb; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        button:hover { background: #1d4ed8; }
        .alert-success { background: #dcfce7; color: #166534; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; }
        .alert-error { background: #fee2e2; color: #991b1b; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; }
        .link { text-align: center; margin-top: 15px; font-size: 14px; }
    </style>
</head>
<body>
<div class="card">
    <h2>Login Perpustakaan</h2>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert-error">{{ $errors->first() }}</div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Masuk</button>
    </form>

    <div class="link">
        Belum punya akun? <a href="/register">Daftar di sini</a>
    </div>
</div>
</body>
</html>