<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_id'=>'C001',
                'name'=>'Comedy'
            ],
            [
                'category_id'=>'C002',
                'name'=>'Adventure'
            ],
            [
                'category_id'=>'C003',
                'name'=>'Romance'
            ],
            [
                'category_id'=>'C004',
                'name'=>'Drama'
            ],
            [
                'category_id'=>'C005',
                'name'=>'Action'
            ]
        ]);
    }
}
