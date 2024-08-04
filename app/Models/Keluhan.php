<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhan';
    protected $primaryKey = 'id_keluhan';

    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'id_customer',
        'id_pegawai', // Ensure this matches the column name in the database
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol', 'no_pol');
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'id_customer', 'id'); // Foreign key and local key
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id'); // Foreign key and local key
    }
}