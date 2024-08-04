<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Detail Barang</h3>
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <h5>Nama Barang: {{ $barang->nama_barang }}</h5>
                <p>Merek: {{ $barang->merek }}</p>
                <p>Harga: {{ $barang->harga }}</p>
                <p>Stok: {{ $barang->stok }}</p>
                <p>Satuan: {{ $barang->satuan }}</p>
                
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
