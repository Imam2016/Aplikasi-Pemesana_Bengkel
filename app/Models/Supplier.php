<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'supplier';

    // Tentukan primary key jika berbeda dari default 'id'
    protected $primaryKey = 'id_supplier';

    // Tentukan apakah primary key auto increment
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan atribut yang bisa diisi secara massal
    protected $fillable = [
        'nama_supplier',
        'alamat',
        'no_hp',
        'id_barang',
    ];


    // Relasi dengan model Barang jika diperlukan
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}