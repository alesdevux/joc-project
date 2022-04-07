<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title= $this->faker->words(3, true);
        $slug= strtolower(str_replace(' ', '-', $title));
        return [
            'title'=>$title,
            'slug'=>$slug,
            'description'=>$this->faker->sentence,
            'award'=>$this->faker->numberBetween(50, 10000),
            'date'=>$this->faker->dateTime,
            'plataform'=>$this->faker->word,
            'category_id'=>$this->faker->numberBetween(1, 5),
        ];
    }
}
