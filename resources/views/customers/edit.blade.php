<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">Edit Customer</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_customer" class="form-label">Nama:</label>
                                <input type="text" id="nama_customer" name="nama_customer" value="{{ $customer->nama_customer }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <input type="text" id="alamat" name="alamat" value="{{ $customer->alamat }}" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                    <option value="">Select Gender</option>
                                    <option value="L" @if($customer->jenis_kelamin == 'L') selected @endif>Male</option>
                                    <option value="P" @if($customer->jenis_kelamin == 'P') selected @endif>Female</option>
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