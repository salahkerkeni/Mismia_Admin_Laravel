<?php

namespace Database\Factories;

use App\Models\Categorys;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
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
            'product_name' => 'Product ' . $f->lastName,
            'price_fixed' => $f->numberBetween(60, 200),
            'price_solde' => $f->numberBetween(0, 100),
        ];
    }
}
