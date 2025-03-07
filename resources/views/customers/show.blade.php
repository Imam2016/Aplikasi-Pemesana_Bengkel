<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            padding: 20px;
            margin-bottom: 30px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .card p {
            margin-bottom: 10px;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Customer Detail</h1>
        <div class="card">
            <p><strong>ID:</strong> {{ $customer->id }}</p>
            <p><strong>Nama:</strong> {{ $customer->nama_customer }}</p>
            <p><strong>Alamat:</strong> {{ $customer->alamat }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $customer->jenis_kelamin }}</p>
        </div>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary btn-back">Back to List</a>
    </div>
</body>
</html>