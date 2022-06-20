<?php

namespace Database\Seeders;

use App\Models\Categorys;
use App\Models\Colors;
use App\Models\Description;
use App\Models\Images;
use App\Models\Models;
use App\Models\Prices;
use App\Models\Products;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        Models::factory(2)
            ->has(Categorys::factory(2)
                ->has(
                    Products::factory(2)
                        ->hasAttached(
                            Colors::factory(2),
                            function () {
                                return [
                                    'image_name' => Factory::create()->imageUrl(),
                                    'order' => Factory::create()->numberBetween(1, 5),
                                    'size' => Factory::create()->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
                                    'quantity' => Factory::create()->numberBetween(0, 15),
                                ];
                            }
                        )
                        ->hasAttached(
                            Description::factory(2),
                            function () {
                                return [
                                    'detail_description' => Factory::create()->words(2, true),
                                    'sous_detail_description' => Factory::create()->realText(50, 1)
                                ];
                            }
                        )
                )
                , 'categorys')
            ->create();
    }
}
