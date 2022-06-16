<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->sentence(),
            'slug' => str()->slug($title),
            'file' => $this->faker->imageUrl($width = 1920, $height = 1080),
            'dimension' => $width . 'x' . $height,
            'views_count' => $this->faker->randomNumber(5),
            'download_count' => $this->faker->randomNumber(5),
            'is_published' => true,
            'user_id' => User::factory()
        ];
    }
}
