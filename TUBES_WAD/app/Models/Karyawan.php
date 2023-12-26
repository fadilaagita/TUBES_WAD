<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';
    protected $primaryKey = 'karyawan_id';

    protected $fillable = [
        'nama_karyawan',
        'alamat',
        'no_telp',
        'email',
        'shift'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'karyawan_id', 'karyawan_id');
    }
}
