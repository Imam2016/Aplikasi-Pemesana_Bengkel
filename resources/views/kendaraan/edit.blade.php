<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Edit Kendaraan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="no_pol">No Pol:</label>
                                <input type="text" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" class="form-control" maxlength="10" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="no_mesin">No Mesin:</label>
                                <input type="text" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}" class="form-control" maxlength="15" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="merek">Merek:</label>
                                <select id="merek" name="merek" class="form-control" required>
                                    <option value="honda" @if($kendaraan->merek == 'Honda') selected @endif>Honda</option>
                                    <option value="yamaha" @if($kendaraan->merek == 'Yamaha') selected @endif>Yamaha</option>
                                    <option value="suzuki" @if($kendaraan->merek == 'Suzuki') selected @endif>Suzuki</option>
                                    <option value="kawasaki" @if($kendaraan->merek == 'Kawasaki') selected @endif>Kawasaki</option>
                                    <option value="lain" @if($kendaraan->merek == 'Lain') selected @endif>Lain</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna:</label>
                                <select id="warna" name="warna" class="form-control" required>
                                    <option value="Putih" @if($kendaraan->warna == 'Putih') selected @endif>Putih</option>
                                    <option value="Hitam" @if($kendaraan->warna == 'Hitam') selected @endif>Hitam</option>
                                    <option value="Hijau" @if($kendaraan->warna == 'Hijau') selected @endif>Hijau</option>
                                    <option value="Biru" @if($kendaraan->warna == 'Biru') selected @endif>Biru</option>
                                    <option value="Merah" @if($kendaraan->warna == 'Merah') selected @endif>Merah</option>
                                    <option value="Lain" @if($kendaraan->warna == 'Lain') selected @endif>Lain</option>
                                </select>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>