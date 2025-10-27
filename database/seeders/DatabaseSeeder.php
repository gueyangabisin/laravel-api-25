<?php

namespace Database\Seeders;

use App\Models\Authors;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            AuthorSeeder::class, #seeder authors
            BooksSeeder::class, #seeder books
        ]);

        // User::factory(10)->create();
        /** 
        *User::factory()->create([
        *   'name' => 'Test User',
        *    'email' => 'test@example.com',
        *]);
        */
    }
}
