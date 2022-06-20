<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
            'email' => $f->freeEmail(),
            'mdp' => $f->sha1(),
            'first_name' => $f->firstName,
            'last_name' => $f->lastName,
            'phone_number' => $f->phoneNumber,
        ];
    }
}
