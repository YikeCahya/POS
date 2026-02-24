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
        ['kategori_id' => 1, 'barang_kode' => 'TV01', 'barang_nama' => 'TV LED', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
        ['kategori_id' => 1, 'barang_kode' => 'LP01', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
        ['kategori_id' => 2, 'barang_kode' => 'SN01', 'barang_nama' => 'Chiki', 'harga_beli' => 1000, 'harga_jual' => 2000],
        ['kategori_id' => 2, 'barang_kode' => 'SN02', 'barang_nama' => 'Biskuit', 'harga_beli' => 5000, 'harga_jual' => 7000],
        ['kategori_id' => 3, 'barang_kode' => 'DW01', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3000],
        ['kategori_id' => 3, 'barang_kode' => 'DW02', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3000, 'harga_jual' => 5000],
        ['kategori_id' => 4, 'barang_kode' => 'KS01', 'barang_nama' => 'Sabun Muka', 'harga_beli' => 15000, 'harga_jual' => 20000],
        ['kategori_id' => 4, 'barang_kode' => 'KS02', 'barang_nama' => 'Parfum', 'harga_beli' => 50000, 'harga_jual' => 75000],
        ['kategori_id' => 5, 'barang_kode' => 'PR01', 'barang_nama' => 'Sapu', 'harga_beli' => 10000, 'harga_jual' => 15000],
        ['kategori_id' => 5, 'barang_kode' => 'PR02', 'barang_nama' => 'Piring', 'harga_beli' => 5000, 'harga_jual' => 8000],
    ];
    DB::table('m_barang')->insert($data);
    }
}
