<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional kalau sudah sesuai konvensi)
    protected $table = 'pendaftarans';

    protected $fillable = ['nisn', 'nama', 'nik', 'jk', 'alamat', 'status'];
}
