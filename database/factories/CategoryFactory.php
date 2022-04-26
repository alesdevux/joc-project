<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoryFactory extends Factory {
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition() {
    $name = $this->faker->words(2, true);
    $slug = strtolower(str_replace(' ', '-', $name));
    return [
      'name' => $name,
      'slug' =>  $slug,
      'image' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
    ];
  }
}
