<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\DosenPembimbing;
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
            'role' => 'admin',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Admin',
            'nim' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345'),
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Dosen',
            'nim' => 'Dosen',
            'email' => 'dosen@gmail.com',
            'role' => 'dosen',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Satria Pratama',
            'nim' => '11191001',
            'email' => 'satria@gmail.com',
            'role' => 'mahasiswa',
            'password' => bcrypt('12345')
        ]);
        DosenPembimbing::factory(10)->create();
    }
}
