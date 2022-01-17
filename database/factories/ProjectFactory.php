<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_index' => $this->faker->numberBetween(0, 4),
            'title' => $this->faker->word(),
            'summary' => $this->faker->paragraph(),
            'tags' => [
                'tag_1' => $this->faker->word(),
                'tag_2' => $this->faker->word(),
                'tag_3' => $this->faker->word(),
            ],
            'likes' => $this->faker->randomDigit(),
            'code_url' => $this->faker->word(),
            'github_url' => $this->faker->word(),
        ];
    }
}
