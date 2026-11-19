
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Anggota - Digital Library</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<header>
    <div class="navbar">
        <h2>Digital Library</h2>
        <nav>
    <a href="{{ route('anggota.create') }}">Tambah Anggota</a>
    <a class="aktif" href="{{ route('anggota.index') }}">Data Anggota</a>
    <a href="{{ route('kartu.index') }}">Nomor Kartu</a>
</nav>
    </div>
</header>

<main>
    <section class="judul">
        <h1>Edit Profil Anggota</h1>
        <p>Perbarui data anggota perpustakaan.</p>
    </section>

    <section class="section">
        <form action="{{ route('anggota.update', $anggota->id) }}"
              method="POST" class="form-anggota">
            @csrf
            @method('PUT')

            <label>Nama Lengkap</label>
            <input type="text" name="nama"
                   value="{{ old('nama', $anggota->nama) }}" required>

            <label>Email</label>
            <input type="email" name="email"
                   value="{{ old('email', $anggota->email) }}" required>

            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon"
                   value="{{ old('nomor_telepon', $anggota->nomor_telepon) }}" required>

            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                   value="{{ old('tanggal_lahir', $anggota->tanggal_lahir) }}" required>

            <label>Alamat</label>
            <textarea name="alamat" required>{{ old('alamat', $anggota->alamat) }}</textarea>

            <label>Tipe Keanggotaan</label>
            <select name="tipe_keanggotaan" required
                    style="width:100%; padding:11px; border:1px solid #ccc; border-radius:6px;">
                <option value="Reguler"
                    @selected(old('tipe_keanggotaan', $anggota->tipe_keanggotaan) == 'Reguler')>
                    Reguler
                </option>
                <option value="Premium"
                    @selected(old('tipe_keanggotaan', $anggota->tipe_keanggotaan) == 'Premium')>
                    Premium
                </option>
            </select>

            <button type="submit" class="btn-utama">
                Simpan Perubahan
            </button>

            <a href="{{ route('anggota.index') }}" class="btn-kecil"
               style="margin-top:12px;">
                Batal
            </a>
        </form>
    </section>
</main>

</body>
</html>
