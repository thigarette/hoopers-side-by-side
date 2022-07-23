<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $conference_ids = Conference::all()->pluck('id')->all();
        return [
            'name' => $this->faker->company(),
            'logo' => $this->faker->imageUrl($category = "basketball"),
            'conference_id' => array_rand(array_flip($conference_ids), 1)
        ];
    }
}
