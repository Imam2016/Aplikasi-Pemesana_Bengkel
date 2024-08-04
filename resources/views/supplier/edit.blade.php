<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Edit Supplier</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('supplier.update', $supplier->id_supplier) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_supplier">Nama Supplier:</label>
                                <input type="text" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}" class="form-control" maxlength="150" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea id="alamat" name="alamat" class="form-control" required>{{ $supplier->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP:</label>
                                <input type="text" id="no_hp" name="no_hp" value="{{ $supplier->no_hp }}" class="form-control" maxlength="15" required>
                            </div>
                            <div class="form-group">
                                <label for="id_barang">ID Barang:</label>
                                <input type="number" id="id_barang" name="id_barang" value="{{ $supplier->id_barang }}" class="form-control" required>
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
