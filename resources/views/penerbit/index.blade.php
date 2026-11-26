<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penerbit - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #fdfdff; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 15px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #ab960c; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn-tambah {
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Data Penerbit & Supplier (Laravel)</h1>
    <p>Pengelolaan Data Penerbit Buku - Modul Migrasi</p>

    <a href="/penerbit/tambah" class="btn-tambah">+ Tambah Penerbit Baru</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Kategori</th>
                <th>Kontak Sales</th>
                <th>Wilayah</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @forelse($penerbits as $d)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $d->nama_perusahaan }}</td>
                    <td>{{ $d->kategori }}</td>
                    <td>{{ $d->kontak_sales }}</td>
                    <td>{{ $d->wilayah }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>
                        <a href="/penerbit/{{ $d->id }}/edit" style="padding: 5px 10px; background-color: #ffc107; color: black; text-decoration: none; border-radius: 4px; font-size:14px;">Edit</a>
                        
                        <form action="/penerbit/{{ $d->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer; font-size:14px;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan='7' style='text-align:center;'>Belum ada data penerbit.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>