<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'post_id' => Post::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'comment' => $this->faker->text,
        ];
    }
}
