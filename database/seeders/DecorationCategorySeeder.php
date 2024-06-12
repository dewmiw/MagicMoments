<?php

namespace Database\Seeders;

use App\Models\DecorationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DecorationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DecorationCategory::factory(100)->create();
    }
}
