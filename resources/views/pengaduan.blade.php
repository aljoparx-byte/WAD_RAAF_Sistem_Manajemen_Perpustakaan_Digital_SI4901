<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan - Penerbit Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Form Pengaduan Supplier / Buku</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="/pengaduan/store" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pelapor</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="contoh@email.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori Pengaduan</label>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    <option value="Keterlambatan Pengiriman">Keterlambatan Pengiriman</option>
                                    <option value="Kerusakan Buku / Fisik">Kerusakan Buku / Fisik</option>
                                    <option value="Kesalahan Jumlah / Isi">Kesalahan Jumlah / Isi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Detail / Deskripsi Pengaduan</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan detail kendala yang dialami..." required></textarea>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>