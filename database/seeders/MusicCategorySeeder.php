<?php

namespace Database\Seeders;

use App\Models\MusicCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MusicCategory::factory(100)->create();

    }
}
