<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-primary mb-3">Tambah Kendaraan</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No Pol</th>
                                    <th scope="col">No Mesin</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kendaraan as $item)
                                    <tr>
                                        <td>{{ $item->no_pol }}</td>
                                        <td>{{ $item->no_mesin }}</td>
                                        <td>{{ $item->merek }}</td>
                                        <td>{{ $item->warna }}</td>
                                        <td>
                                            <a href="{{ route('kendaraan.show', $item->no_pol) }}" class="btn btn-sm btn-info">Lihat</a>
                                            <a href="{{ route('kendaraan.edit', $item->no_pol) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('kendaraan.destroy', $item->no_pol) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')">Hapus</button>
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