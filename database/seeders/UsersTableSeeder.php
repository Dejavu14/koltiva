<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat user 'Koltiva' jika belum ada
        $koltiva = User::where('email', 'koltiva@example.com')->first();
        if (!$koltiva) {
            User::create([
                'name' => 'Koltiva',
                'email' => 'koltiva@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        // Membuat 50 user secara massal dengan email unik
        User::factory()->count(9)->create();
    }
}
