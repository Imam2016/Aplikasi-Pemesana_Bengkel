<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tambah Kendaraan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no_pol">No Pol:</label>
                                <input type="text" id="no_pol" name="no_pol" class="form-control" maxlength="10" required>
                            </div>
                            <div class="form-group">
                                <label for="no_mesin">No Mesin:</label>
                                <input type="text" id="no_mesin" name="no_mesin" class="form-control" maxlength="15" required>
                            </div>
                            <div class="form-group">
                                <label for="merek">Merek:</label>
                                <select id="merek" name="merek" class="form-control" required>
                                    <option value="">Pilih Merek</option>
                                    <option value="honda">Honda</option>
                                    <option value="yamaha">Yamaha</option>
                                    <option value="suzuki">Suzuki</option>
                                    <option value="kawasaki">Kawasaki</option>
                                    <option value="lain">Lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna:</label>
                                <select id="warna" name="warna" class="form-control" required>
                                    <option value="">Pilih Warna</option>
                                    <option value="Putih">Putih</option>
                                    <option value="Hitam">Hitam</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Biru">Biru</option>
                                    <option value="Merah">Merah</option>
                                    <option value="Lain">Lain</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>