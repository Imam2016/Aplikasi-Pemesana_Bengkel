<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3 class="text-center my-4">Tambah Keluhan</h3>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('keluhan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_keluhan" class="form-label">Nama Keluhan</label>
                                <input type="text" class="form-control @error('nama_keluhan') is-invalid @enderror" id="nama_keluhan" name="nama_keluhan" value="{{ old('nama_keluhan') }}" required>
                                @error('nama_keluhan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ongkos" class="form-label">Ongkos</label>
                                <input type="number" class="form-control @error('ongkos') is-invalid @enderror" id="ongkos" name="ongkos" value="{{ old('ongkos') }}" required>
                                @error('ongkos')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_pol" class="form-label">Nomor Polisi</label>
                                <select id="no_pol" name="no_pol" class="form-select @error('no_pol') is-invalid @enderror" required>
                                    <option value="">Pilih Nomor Polisi</option>
                                    @foreach ($kendaraan as $k)
                                        <option value="{{ $k->no_pol }}">{{ $k->no_pol }}</option>
                                    @endforeach
                                </select>
                                @error('no_pol')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="id_customer" class="form-label">Customer</label>
                                <select id="id_customer" name="id_customer" class="form-select @error('id_customer') is-invalid @enderror" required>
                                    <option value="">Pilih Customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->nama_customer }}</option>
                                    @endforeach
                                </select>
                                @error('id_customer')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="id_pegawai" class="form-label">Pegawai</label>
                                <select id="id_pegawai" name="id_pegawai" class="form-select @error('id_pegawai') is-invalid @enderror" required>
                                    <option value="">Pilih Pegawai</option>
                                    @foreach ($pegawai as $peg)
                                        <option value="{{ $peg->id }}">{{ $peg->nama_pegawai }}</option>
                                    @endforeach
                                </select>
                                @error('id_pegawai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('keluhan.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>