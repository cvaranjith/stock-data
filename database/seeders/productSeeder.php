<?php

namespace Database\Seeders;

use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products          = new products();
    $products->product = 'Apple';
    $products->stock_available = 0;
    $products->save();

    $products          = new products();
    $products->product = 'Orange';
    $products->stock_available = 0;
    $products->save();

    $products          = new products();
    $products->product = 'Banana';
    $products->stock_available = 0;
    $products->save();

    $products          = new products();
    $products->product = 'Mango';
    $products->stock_available = 0;
    $products->save();
    }
}
