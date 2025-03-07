<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol';
    // Menentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'no_pol',
        'no_mesin',
        'merek',
        'warna',
    ];
}
