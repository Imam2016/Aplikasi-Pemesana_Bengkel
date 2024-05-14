<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Edit Customer</h3>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('customers.update', $customer->customer_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_customer">Name:</label>
                                <input type="text" id="nama_customer" name="nama_customer" value="{{ $customer->nama_customer }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Address:</label>
                                <input type="text" id="alamat" name="alamat" value="{{ $customer->alamat }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Gender:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                    <option value="L" @if($customer->jenis_kelamin == 'L') selected @endif>Male</option>
                                    <option value="P" @if($customer->jenis_kelamin == 'P') selected @endif>Female</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
