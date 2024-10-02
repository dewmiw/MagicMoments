<?php

namespace Database\Seeders;

use App\Models\DecorationCategory;
use App\Models\MusicCategory;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin1@admin.com',
            'role' => 1,
            'password' => bcrypt('password')
        ]);

//        User::factory(100)->create();








    }
}
