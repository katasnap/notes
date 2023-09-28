<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            ['name' => 'Componer una canción'],
            ['name' => 'Pasear a mi perro'],
            ['name' => 'Pagar netflix'],
        ];

        collect($data)->each(function ($item) {
            Note::create($item);
        });
    }
}
