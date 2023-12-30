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
                'nama_karyawan' => 'Octamevia Inkaputri',
                'alamat' => 'Jl. Bojongsoang',
                'no_telp' => '081234567890',
                'email' => 'mevi@gmail.com',
                'shift' => 'Pagi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nama_karyawan' => 'John Doe',
                'alamat' => 'Jl. Cikoneng',
                'no_telp' => '081234567891',
                'email' => 'john@gmail.com',
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
                'nama_karyawan' => 'Antonio Conte',
                'alamat' => 'Jl. Raya Bandung',
                'no_telp' => '081234567894',
                'email' => 'anton@gmail.com',
                'shift' => 'Malam',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('karyawans')->insert($data);
    }
}
