<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Panggil seeder lain yang ingin dijalankan
        $this->call([
            UsersTableSeeder::class,
            CommentsTableSeeder::class
            // Daftarkan seeder lainnya di sini jika ada
        ]);
    }
}
