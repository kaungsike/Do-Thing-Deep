<?php

namespace Database\Seeders;

use App\Models\SanTar;
use Database\Factories\SanTarFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SanTar::factory()->count(5)->create();
    }
}
