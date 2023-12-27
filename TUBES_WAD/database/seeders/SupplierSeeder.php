<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'nama_supplier' => 'PT. Sumber Makmur',
                'alamat' => 'Jl. Raya Bogor KM 30',
                'no_telp' => '081234567890',
                'email' => 'sumbermakmur@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_supplier' => 'PT. Jaya Abadi',
                'alamat' => 'Jl. Raya Depok KM 12',
                'no_telp' => '081234567891',
                'email' => 'jayaabadi@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_supplier' => 'PT. Maju Mundur',
                'alamat' => 'Jl. Raya Jakarta KM 20',
                'no_telp' => '081234567892',
                'email' => 'majumundur@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_supplier' => 'CV. Cahaya Baru',
                'alamat' => 'Jl. Raya Tangerang No. 12',
                'no_telp' => '081234567893',
                'email' => 'cahayabaru@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_supplier' => 'Toko Bunga Nusantara',
                'alamat' => 'Jl. Raya Bandung KM 15',
                'no_telp' => '081234567894',
                'email' => 'bunganun@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('suppliers')->insert($data);
    }
}
