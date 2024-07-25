<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {
            Barang::create([
                'nama_barang' => "Barang {$i}",
                'harga_barang' => rand(1000, 50000),
            ]);
        }
    }
}
