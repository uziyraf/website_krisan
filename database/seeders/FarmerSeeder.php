<?php

namespace Database\Seeders;

// UBAH BAGIAN INI
use App\Models\Petani; // Dari Farmer menjadi Petani
use App\Models\Bunga;  // Dari Flower menjadi Bunga
use Illuminate\Database\Seeder;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat data Petani menggunakan Model Petani
        Petani::create([
            'name' => 'Sudartono',
            'address' => 'Tutur - Pasuruan',
            'specialization' => 'Spesialis Bunga Krisan',
            'description' => 'Petani berpengalaman, ahli budidaya Krisan sejak 2010.',
            'image' => 'images/pak_kasun.JPG',
            'story' => 'Sejak tahun 1995, saya telah mendedikasikan hidup untuk membudidayakan krisan terbaik.',
            'whatsapp' => '6281357853271',
        ]);

        Petani::create([
            'name' => 'Budi Santoso',
            'address' => 'Selecta - Batu',
            'specialization' => 'Spesialis Krisan Potong',
            'description' => 'Fokus pada kualitas bunga krisan untuk pasar bunga potong.',
            'image' => 'images/petani_2.JPG',
            'story' => 'Kebun kami menghasilkan bunga potong segar setiap hari untuk florist di seluruh Jawa Timur.',
            'whatsapp' => '6281234567890',
        ]);

        // 2. Hubungkan Petani dengan Bunga
        // Ambil data menggunakan Model yang benar
        $petaniSudartono = Petani::where('name', 'Sudartono')->first();
        $petaniBudi = Petani::where('name', 'Budi Santoso')->first();

        $bungaKuning = Bunga::where('name', 'Fiji Kuning')->first();
        $bungaPink = Bunga::where('name', 'Nismara Pink')->first();
        $bungaPutih = Bunga::where('name', 'Puma Putih')->first();

        // Gunakan nama relasi yang benar ('bunga', bukan 'flowers')
        $petaniSudartono->bunga()->attach([$bungaKuning->id, $bungaPink->id, $bungaPutih->id]);
        $petaniBudi->bunga()->attach([$bungaKuning->id, $bungaPutih->id]);
    }
}