<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $f = \Faker\Factory::create('fr_FR');
        return [
            'street' => $f->streetAddress,
            'postal_code' => $f->postcode,
            'city' => $f->city,
            'department' => $f->streetSuffix,
        ];
    }
}
