<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $title['en'] = $this->faker->word($maxNbChars = 20);
        $title['fr'] = $this->faker->word($maxNbChars = 20);
        // dd(gettype($title));

        return [
            // 'title' => $title,
            'title' => [
                'en' => [$this->faker->word($maxNbChars = 20)],
                'fr' => [$this->faker->word($maxNbChars = 20)],
            ],
        ];
    }
}
