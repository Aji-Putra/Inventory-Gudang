<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'toko';
    protected $fillable = [
        'kode_toko','Nama_toko','alamat','telepone_toko'
    ];
}
