<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) { // Untuk setiap transaksi id 1-10
            for ($j = 1; $j <= 3; $j++) { // Beli 3 barang berbeda
                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10),
                    'harga' => 10000, // Sesuaikan atau ambil dari m_barang
                    'jumlah' => rand(1, 5),
                ];
            }
        }
    DB::table('t_penjualan_detail')->insert($data);
    }
}
