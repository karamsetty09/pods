<?php

namespace Database\Factories;

use App\Models\Podcasts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcasts>
 */
class PodcastFactory extends Factory
{
    
    protected $model = Podcasts::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'description' => $this->faker->sentence(10),
            'marketingurl' => $this->faker->sentence(10),
            'feedurl' => $this->faker->sentence(10),
            'status' => 'review',
        ];
    }
}
