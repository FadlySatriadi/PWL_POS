<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MNM001',
                'barang_nama' => 'Buavita',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
                'created_at' => now()
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MNM002',
                'barang_nama' => 'Pocari Sweat',
                'harga_beli' => 6000,
                'harga_jual' => 8000,
                'created_at' => now()
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Nasi Padang',
                'harga_beli' => 9000,
                'harga_jual' => 10000,
                'created_at' => now()
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Lalapan Ayam',
                'harga_beli' => 8000,
                'harga_jual' => 9000,
                'created_at' => now()
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SNC001',
                'barang_nama' => 'Chitato',
                'harga_beli' => 2500,
                'harga_jual' => 3500,
                'created_at' => now()
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'SNC002',
                'barang_nama' => 'Oreo',
                'harga_beli' => 5000,
                'harga_jual' => 6500,
                'created_at' => now()
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'SBK001',
                'barang_nama' => 'Telur',
                'harga_beli' => 1800,
                'harga_jual' => 2000,
                'created_at' => now()
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'SBK002',
                'barang_nama' => 'Beras',
                'harga_beli' => 13500,
                'harga_jual' => 15000,
                'created_at' => now()
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PRB001',
                'barang_nama' => 'Sofa',
                'harga_beli' => 800000,
                'harga_jual' => 1000000,
                'created_at' => now()
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'PRB002',
                'barang_nama' => 'Meja Kerja',
                'harga_beli' => 600000,
                'harga_jual' => 700000,
                'created_at' => now()
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
