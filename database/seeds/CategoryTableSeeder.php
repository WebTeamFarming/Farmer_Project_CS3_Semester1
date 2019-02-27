<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            [
                'category_name' => 'Fruit',
                'category_type' => 1
            ],

            [
                'category_name' => 'Crop',
                'category_type' => 1
            ],

            [
                'category_name' => 'Tractor',
                'category_type' => 2
            ],

            [
                'category_name' => 'Fertilizer',
                'category_type' => 2
            ],

            [
                'category_name' => 'Pesticide',
                'category_type' => 2
            ],
        ]);
    }
}
