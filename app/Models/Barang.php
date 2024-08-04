<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nama_barang',
        'merek',
        'harga',
        'stok',
        'satuan',
    ];
    public $timestamps = true;

    // Relasi dengan model Supplier
    public function supplier()
    {
        return $this->hasMany(Supplier::class, 'id_barang', 'id_barang');
    }
}
