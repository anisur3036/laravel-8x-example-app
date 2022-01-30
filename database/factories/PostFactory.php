<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'title' => rtrim($this->faker->sentence(), '.'),
            'body' => $this->faker->paragraph(),
            'user_id' => User::factory(),
        ];
    }
}
