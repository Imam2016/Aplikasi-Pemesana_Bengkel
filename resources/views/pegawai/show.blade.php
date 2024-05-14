<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Detail Pegawai
                    </div>
                    <div class="card-body">
                        <p><strong>Nama Pegawai:</strong> {{ $pegawai->nama_pegawai }}</p>
                        <p><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>
                        <p><strong>Jenis Kelamin:</strong> {{ $pegawai->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        <p><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
                        <p><strong>Status:</strong> {{ $pegawai->status }}</p>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
