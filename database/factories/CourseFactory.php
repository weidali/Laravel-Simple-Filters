<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Lang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $category = Category::inRandomOrder()->first();
        if (!$category) {
            $category = Category::factory(1)->create();
        }
        $lang = Lang::inRandomOrder()->first();
        if (!$lang) {
            $lang = Lang::factory(1)->create();
        }

        return [
            'title' => [
                'en' => $this->faker->text($maxNbChars = 20),
                'fr' => $faker->text($maxNbChars = 20)
            ],
            'short_info' => [
                'en' => $this->faker->text($maxNbChars = 30),
                'fr' => $faker->text($maxNbChars = 30)
            ],
            'description' => [
                'en' => $this->faker->text($maxNbChars = 40),
                'fr' => $faker->text($maxNbChars = 40)
            ],
            'category_id' => $category->id,
            'lang_id' => $lang->id,
        ];
    }
}
