<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Pegawai</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('pegawai.create') }}" class="btn btn-md btn-primary mb-3">Tambah Pegawai</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Pegawai</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawai as $pgw)
                                    <tr>
                                        <td>{{ $pgw->id }}</td>
                                        <td>{{ $pgw->nama_pegawai }}</td>
                                        <td>{{ $pgw->alamat }}</td>
                                        <td>{{ $pgw->jenis_kelamin }}</td>
                                        <td>{{ $pgw->jabatan }}</td>
                                        <td>{{ $pgw->status }}</td>
                                        <td>
                                            <a href="{{ route('pegawai.show', $pgw->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                            <a href="{{ route('pegawai.edit', $pgw->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('pegawai.destroy', $pgw->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">Hapus</button>
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
</body>
</html>