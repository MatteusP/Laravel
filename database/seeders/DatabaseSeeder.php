<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BusinessSeeder::class,
        ]);



        /*Business::factory(count:2)->create();
        \App\Models\Business::factory(2)->create();
        
        \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
        ]); */
    }
}
