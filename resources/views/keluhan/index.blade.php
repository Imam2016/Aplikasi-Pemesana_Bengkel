<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center my-4">Daftar Keluhan</h3>
                <hr>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('keluhan.create') }}" class="btn btn-md btn-primary mb-3">Tambah Keluhan</a>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Keluhan</th>
                                    <th scope="col">Ongkos</th>
                                    <th scope="col">Nomor Polisi</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Pegawai</th>
                                    <th scope="col">Tanggal Dibuat</th>
                                    <th scope="col">Tanggal Diperbarui</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluhan as $item)
                                    <tr>
                                        <td>{{ $item->id_keluhan }}</td>
                                        <td>{{ $item->nama_keluhan }}</td>
                                        <td>{{ $item->ongkos }}</td>
                                        <td>{{ $item->no_pol }}</td>
                                        <td>{{ $item->customer ? $item->customer->nama_customer : 'N/A' }}</td>
                                        <td>{{ $item->pegawai ? $item->pegawai->nama_pegawai : 'N/A' }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                                        <td>{{ $item->updated_at->format('d-m-Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('keluhan.show', $item->id_keluhan) }}" class="btn btn-sm btn-info">Lihat</a>
                                            <a href="{{ route('keluhan.edit', $item->id_keluhan) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('keluhan.destroy', $item->id_keluhan) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus keluhan ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
