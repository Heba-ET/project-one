<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private function generateRandomImage($path)
    {
        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));

        return fake()->randomElement($files);
    }   

    public function definition(): array
    {
        return [
            'productTitle' => fake()->randomElement(['Natural Health', 'Skin Care', 'Health Food', 'Beauty Care']),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2),
            // 'image' => basename(fake()->image(public_path('assets/images/product'))),
            'image' => $this->generateRandomImage(public_path('assets/images/product')),
        ];
    }
}
