<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Create New Supplier</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('supplier.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_supplier" class="form-label">Name:</label>
                                <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Address:</label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Phone:</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="id_barang" class="form-label">Barang:</label>
                                <select name="id_barang" id="id_barang" class="form-select">
                                    <option value="">Select Barang</option>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id_barang }}">{{ $item->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>