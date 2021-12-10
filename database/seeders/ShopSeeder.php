<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::factory(1)->create(['user_id' => 4]);
        Shop::factory(1)->create(['user_id' => 5]);
    }
}
