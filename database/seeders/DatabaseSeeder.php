<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Memulai FlowerSeeder...');
        $this->call(FlowerSeeder::class);
        $this->command->info('✅ FlowerSeeder selesai.');

        $this->command->info('---------------------------------');

        $this->command->info('Memulai FarmerSeeder...');
        $this->call(FarmerSeeder::class);
        $this->command->info('✅ FarmerSeeder selesai.');
    }
}