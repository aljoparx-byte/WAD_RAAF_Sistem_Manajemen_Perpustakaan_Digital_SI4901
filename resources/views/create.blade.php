<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota - Digital Library</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<header>
    <div class="navbar">
        <h2>Digital Library</h2>

        <nav>
    <a class="aktif" href="{{ route('anggota.create') }}">Tambah Anggota</a>
    <a href="{{ route('anggota.index') }}">Data Anggota</a>
    <a href="{{ route('kartu.index') }}">Nomor Kartu</a>
</nav>
    </div>
</header>

<main>

    <section class="judul">
        <h1>Tambah Anggota</h1>
        <p>Tambahkan data anggota perpustakaan.</p>
    </section>

    <section class="section">

        <form action="{{ route('anggota.store') }}" method="POST" class="form-anggota">
            @csrf

            <label>Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama') }}"
                   placeholder="Masukkan nama lengkap" required>

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}"
                   placeholder="Masukkan email" required>

            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}"
                   placeholder="Masukkan nomor telepon" required>

            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                   value="{{ old('tanggal_lahir') }}" required>

            <label>Alamat</label>
            <textarea name="alamat" placeholder="Masukkan alamat"
                      required>{{ old('alamat') }}</textarea>

            <label>Tipe Keanggotaan</label>
            <select name="tipe_keanggotaan" required
                    style="width:100%; padding:11px; border:1px solid #ccc; border-radius:6px;">
                <option value="Reguler" @selected(old('tipe_keanggotaan') == 'Reguler')>Reguler</option>
                <option value="Premium" @selected(old('tipe_keanggotaan') == 'Premium')>Premium</option>
            </select>

            <button type="submit" class="btn-utama">
                Simpan Anggota
            </button>

        </form>

    </section>

</main>

</body>
</html>