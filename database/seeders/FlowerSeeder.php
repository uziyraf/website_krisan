<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Jangan lupa tambahkan ini

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flowers')->insert([
            [
                'name' => 'Fiji Kuning',
                'description' => 'Bunga krisan Fiji Kuning melambangkan keceriaan dan persahabatan.',
                'image' => 'images/FijiKuning.JPG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nismara Pink',
                'description' => 'Varian krisan Nismara dengan warna pink yang menawan dan lembut.',
                'image' => 'images/NismaraPink.JPG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Puma Putih',
                'description' => 'Krisan Puma Putih melambangkan kesucian, ketulusan, dan kejujuran.',
                'image' => 'images/PumaPutih.JPG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}