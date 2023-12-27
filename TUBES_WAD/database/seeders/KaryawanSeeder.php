<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'nama_karyawan' => 'Rizky Ngawi',
                'alamat' => 'Jl. kita berbeda',
                'no_telp' => '081234567890',
                'email' => 'rizky@gmail.com',
                'shift' => 'Pagi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_karyawan' => 'John Doe',
                'alamat' => 'Jl. sama kamu',
                'no_telp' => '081234567891',
                'email' => 'joh@gmail.com',
                'shift' => 'Pagi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_karyawan' => 'Jane Doe',
                'alamat' => 'Jl. Sukabirus',
                'no_telp' => '081234567892',
                'email' => 'jane@gmail.com',
                'shift' => 'Siang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_karyawan' => 'Joko Pinurbo',
                'alamat' => 'Jl. Raya Jakarta',
                'no_telp' => '081234567893',
                'email' => 'joko@gmail.com',
                'shift' => 'Siang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_karyawan' => 'Joni Kecil',
                'alamat' => 'Jl. Raya Bandung',
                'no_telp' => '081234567894',
                'email' => 'joni@gmail.com',
                'shift' => 'Malam',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('karyawans')->insert($data);
    }
}
