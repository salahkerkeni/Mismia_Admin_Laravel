<?php

namespace Database\Factories;

use App\Models\Categorys;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorys>
 */
class CategorysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $f = $this->faker;
        return [
            'category_name' => 'Category ' . $f->lastName,
            'category_image' => $f->imageUrl(),
        ];
    }
}
