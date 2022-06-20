<?php

namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        Delivery::factory(null, ['price_delivery' => '7'])->create();
        $this->call([ClientSeeder::class, ProductSeeder::class]);
    }
}
