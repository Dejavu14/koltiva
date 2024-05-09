<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        // Pastikan ada setidaknya satu user di database
        if (User::count() == 0) {
            User::create([
                'name' => 'User Default',
                'email' => 'default@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        // Dapatkan semua user ID sebagai array
        $userIds = User::pluck('id')->toArray();

        // Buat 10 post dummy
        foreach (range(1, 10) as $index) {
            Post::create([
                'user_id' => $faker->randomElement($userIds),
                'title' => $faker->sentence,
                'comment' => $faker->paragraph,
            ]);
        }
    }
}
