<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'name' => $this->faker->word(),
            'job_title' => $this->faker->word(),
            'city' => $this->faker->word(),
            'state' => $this->faker->word(),
            'social_links' => [
                'github' => $this->faker->word(),
                'linkedin' => $this->faker->word(),
            ],
            'body' => $this->faker->paragraph(),
        ];
    }
}
