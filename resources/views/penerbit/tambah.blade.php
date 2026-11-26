<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Penerbit Baru - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #fdfdff; }
        h2 { color: #333; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input, .form-group textarea { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { padding: 8px 12px; color: white; text-decoration: none; border-radius: 4px; font-size: 14px; display: inline-block; border: none; cursor: pointer; }
        .btn-tambah { background-color: #28a745; }
        .btn-batal { background-color: #6c75d7; color: white; }
    </style>
</head>
<body>
    <h2>Tambah Data Penerbit</h2>

    <form action="/penerbit" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Perusahaan:</label>
            <input type="text" name="nama_perusahaan" required>
        </div>

        <div class="form-group">
            <label>Kategori:</label>
            <input type="text" name="kategori" required>
        </div>

        <div class="form-group">
            <label>Kontak Sales:</label>
            <input type="text" name="kontak_sales" required>
        </div>

        <div class="form-group">
            <label>Wilayah:</label>
            <input type="text" name="wilayah" required>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-tambah">Simpan Data</button>
        <a href="/penerbit" class="btn btn-batal">Batal</a>
    </form>
</body>
</html>