<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('male'),
            'birth_date' => $this->faker->date(),
            'height' => '6\'11',
            'weight' => '250',
            'wingspan' => '7\'3',
            'image' => $this->faker->imageUrl($category = "basketball"),
            'draft_pick_number' => range(1, 30),
            'draft_round_picked' => range(1, 2),
        ];
    }
}
