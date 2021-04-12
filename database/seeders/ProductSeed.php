<?php

namespace Database\Seeders;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'contain_article' => 1,
                'name' => 'leg',
                'prod_id'=>'1',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'contain_article' => 2,
                'name' => 'screw',
                'prod_id'=>'2',
                'price' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'contain_article' => 3,
                'name' => 'seat',
                'prod_id'=>'3',
                'price' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'contain_article' => 1,
                'name' => 'table top',
                'prod_id'=>'4',
                'price' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('product')->insert($product);
    }
}
