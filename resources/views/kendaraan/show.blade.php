<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kendaraan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <h1>Detail Kendaraan</h1>
        <div class="card">
            <p><strong>No Pol:</strong> {{ $kendaraan->no_pol }}</p>
            <p><strong>No Mesin:</strong> {{ $kendaraan->no_mesin }}</p>
            <p><strong>Merek:</strong> {{ $kendaraan->merek }}</p>
            <p><strong>Warna:</strong> {{ $kendaraan->warna }}</p>
        </div>
        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary btn-back">Kembali ke Daftar</a>
    </div>
</body>
</html>
