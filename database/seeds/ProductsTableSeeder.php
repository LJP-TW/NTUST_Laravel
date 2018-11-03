<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create('zh_TW');
        $total = 20;
        $units = ['台', '個', '把', '桶', '罐'];

        foreach(range(1, $total) as $id) {
            $time = now()->addDays(rand(0, 3))->addHours(rand(0, 24))->addMinutes(rand(0, 60))->addSeconds(rand(0, 60));
            Product::create([
                'name' => $faker->realText(rand(10, 15)),
                'price' => rand(20, 10000),
                'unit' => $units[rand(0, 4)],
                'description' => $faker->realText(rand(100, 200)),
                'created_at' => $time,
                'updated_at' => $time->addDays(rand(0, 2))->addHours(rand(0, 24))->addMinutes(rand(0, 60))->addSeconds(rand(0, 60))
            ]);
        }
    }
}
