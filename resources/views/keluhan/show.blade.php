<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('keluhan.index') }}" class="btn btn-secondary mb-3">Kembali</a>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $keluhan->id_keluhan }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Keluhan</th>
                                    <td>{{ $keluhan->nama_keluhan }}</td>
                                </tr>
                                <tr>
                                    <th>Ongkos</th>
                                    <td>{{ $keluhan->ongkos }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Polisi</th>
                                    <td>{{ $keluhan->no_pol }}</td>
                                </tr>
                                <tr>
                                    <th>Customer</th>
                                    <td>{{ $keluhan->customers ? $keluhan->customers->nama_customer : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Pegawai</th>
                                    <td>{{ $keluhan->pegawai ? $keluhan->pegawai->nama_pegawai : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Dibuat</th>
                                    <td>{{ $keluhan->created_at->format('d-m-Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Diperbarui</th>
                                    <td>{{ $keluhan->updated_at->format('d-m-Y H:i') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>