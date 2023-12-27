<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'nama_barang' => "Semen Tiga Roda",
                'kategori_id' => 1,
                'harga' => 70000.00,
                'stock' => 50,
                'deskripsi' => 'semen 10kg per sak',
                'supplier_id' => 2,
                'tanggal_masuk' => '2023-09-12',
                'karyawan_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_barang' => "Kunci Inggris Tekiro",
                'kategori_id' => 3,
                'harga' => 50000.00,
                'stock' => 17,
                'deskripsi' => 'Kunci Serbaguna berbahan besi titanium',
                'supplier_id' => 4,
                'tanggal_masuk' => '2023-09-29',
                'karyawan_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_barang' => 'Closet Duduk TOTO',
                'kategori_id' => 3,
                'harga' => 2000000.00,
                'stock' => 5,
                'deskripsi' => 'Closet Duduk dengan bahan yang bagus dan kuat',
                'supplier_id' => 3,
                'tanggal_masuk' => '2023-11-03',
                'karyawan_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('barangs')->insert($data);
    }
}
