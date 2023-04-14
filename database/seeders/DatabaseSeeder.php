<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\JobFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.pl',
            'password' => Hash::make('12345'),
        ]);

        $this->call([
            JobCategorySeeder::class,
            JobSeeder::class,
        ]);
    }
}
