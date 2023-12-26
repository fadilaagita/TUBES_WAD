<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'supplier_id';

    protected $fillable = [
        'nama_supplier',
        'alamat',
        'no_telp',
        'email'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'supplier_id', 'supplier_id');
    }
}
