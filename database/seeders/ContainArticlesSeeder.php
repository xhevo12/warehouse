<?php

namespace Database\Seeders;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContainArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contain_article = [
            [
                'art_id' => 1,
                'prod_id' => 1,
                'amount_of' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'art_id' => 2,
                'prod_id' => 1,
                'amount_of' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'art_id' => 2,
                'prod_id' => 2,
                'amount_of' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'art_id' => 1,
                'prod_id' => 3,
                'amount_of' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'art_id' => 1,
                'prod_id' => 4,
                'amount_of' => 61,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('contain_articles')->insert($contain_article);
    }
}
