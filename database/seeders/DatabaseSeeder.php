<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('toppings')->insert([
            [
                'name' => 'Onions',
            ],
            [
                'name' => 'Mushrooms',
            ],
            [
                'name' => 'Olives',
            ],
            [
                'name' => 'Beef',
            ],
            [
                'name' => 'Extra Cheese',
            ]
        ]);

        DB::table('bases')->insert([
            [
                'name' => 'Thin',
            ],
            [
                'name' => 'Normal',
            ],
            [
                'name' => 'Thick',
            ],
            [
                'name' => 'Cheesy Crust',
            ]
        ]);

        DB::table('prices')->insert([
            [
                'priceable_id' => 1,
                'priceable_type' => 'topping',
                'amount' => 5
            ],
            [
                'priceable_id' => 2,
                'priceable_type' => 'topping',
                'amount' => 5
            ],
            [
                'priceable_id' => 3,
                'priceable_type' => 'topping',
                'amount' => 5
            ],
            [
                'priceable_id' => 4,
                'priceable_type' => 'topping',
                'amount' => 10
            ],
            [
                'priceable_id' => 5,
                'priceable_type' => 'topping',
                'amount' => 8
            ],
            [
                'priceable_id' => 1,
                'priceable_type' => 'base',
                'amount' => 30
            ],
            [
                'priceable_id' => 1,
                'priceable_type' => 'base',
                'amount' => 30
            ],
            [
                'priceable_id' => 1,
                'priceable_type' => 'base',
                'amount' => 30
            ],
            [
                'priceable_id' => 1,
                'priceable_type' => 'base',
                'amount' => 40
            ]
        ]);
    }
}
