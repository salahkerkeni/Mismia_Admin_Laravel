<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colors>
 */
class ColorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $f = \Faker\Factory::create('ar_SA');
        return [
            'color_name' => $this->faker->colorName(),
            'hex_color' => $f->hexColor(),
        ];
    }
}
