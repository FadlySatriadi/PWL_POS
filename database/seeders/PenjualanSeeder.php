<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Amir',
                'penjualan_kode' => 'DONE1',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Amar',
                'penjualan_kode' => 'DONE2',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Amin',
                'penjualan_kode' => 'DONE3',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Rais',
                'penjualan_kode' => 'DONE4',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Amin',
                'penjualan_kode' => 'DONE5',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Ganjar',
                'penjualan_kode' => 'DONE6',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Ganjar',
                'penjualan_kode' => 'DONE7',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Mahfud',
                'penjualan_kode' => 'DONE8',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Muhaimin',
                'penjualan_kode' => 'DONE9',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Rocky',
                'penjualan_kode' => 'DONE10',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => now()
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
