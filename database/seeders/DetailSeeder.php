<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 200000,
                'jumlah' => 10,
                'created_at' => now()
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 20000,
                'jumlah' => 11,
                'created_at' => now()
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 150000,
                'jumlah' => 6,
                'created_at' => now()
            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 80000,
                'jumlah' => 6,
                'created_at' => now()
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 65000,
                'jumlah' => 9,
                'created_at' => now()
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 55000,
                'jumlah' => 2,
                'created_at' => now()
            ],
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 52000,
                'jumlah' => 15,
                'created_at' => now()
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 12000,
                'jumlah' => 6,
                'created_at' => now()
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 190000,
                'jumlah' => 4,
                'created_at' => now()
            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 150000,
                'jumlah' => 11,
                'created_at' => now()
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 12000,
                'jumlah' => 13,
                'created_at' => now()
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 12000,
                'jumlah' => 14,
                'created_at' => now()
            ],
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 11000,
                'jumlah' => 15,
                'created_at' => now()
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 16000,
                'jumlah' => 16,
                'created_at' => now()
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 17000,
                'jumlah' => 17,
                'created_at' => now()
            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 8000,
                'jumlah' => 18,
                'created_at' => now()
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 17000,
                'jumlah' => 17,
                'created_at' => now()
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 7000,
                'jumlah' => 20,
                'created_at' => now()
            ],
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 90000,
                'jumlah' => 13,
                'created_at' => now()
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 88000,
                'jumlah' => 54,
                'created_at' => now()
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 7,
                'harga' => 33000,
                'jumlah' => 54,
                'created_at' => now()
            ],
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 44000,
                'jumlah' => 12,
                'created_at' => now()
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 40000,
                'jumlah' => 22,
                'created_at' => now()
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 35000,
                'jumlah' => 25,
                'created_at' => now()
            ],
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 67000,
                'jumlah' => 40,
                'created_at' => now()
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 6000,
                'jumlah' => 1,
                'created_at' => now()
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 9,
                'harga' => 7000,
                'jumlah' => 2,
                'created_at' => now()
            ],
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 44000,
                'jumlah' => 30,
                'created_at' => now()
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 42000,
                'jumlah' => 6,
                'created_at' => now()
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 65000,
                'jumlah' => 25,
                'created_at' => now()
            ],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
