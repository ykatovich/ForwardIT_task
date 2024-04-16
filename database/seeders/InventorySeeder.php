<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InventorySeeder extends Seeder
{
    /**
     */
    public function run(): void
    {
        $faker = Faker::create();

        $inventoryItems = [
            [
                'name' => $faker->word(),
                'quantity' => $faker->randomDigit(),
                'material' => 'Steel',
                'weight' => $faker->randomDigit(),
            ],
            [
                'name' => $faker->word(),
                'quantity' => $faker->randomDigit(),
                'material' => 'Iron',
                'weight' => $faker->randomDigit(),
            ],
            [
                'name' => $faker->word(),
                'quantity' => $faker->randomDigit(),
                'material' => 'Steel',
                'weight' => $faker->randomDigit(),
            ],
            [
                'name' => $faker->word(),
                'quantity' => $faker->randomDigit(),
                'material' => 'Iron',
                'weight' => $faker->randomDigit(),
            ],
            [
                'name' => $faker->word(),
                'quantity' => $faker->randomDigit(),
                'material' => 'Steel',
                'weight' => $faker->randomDigit(),
            ],
        ];

        foreach ($inventoryItems as $item) {
            Inventory::create($item);
        }
    }
}
