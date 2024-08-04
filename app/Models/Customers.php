<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    
    protected $table = "customers";
    protected $primaryKey = 'id'; // Set primary key

    protected $fillable = [
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];
}
