<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Ayomi Satria Pratama',
            'nim' => '11191013',
            'email' => 'ayomisatria@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
