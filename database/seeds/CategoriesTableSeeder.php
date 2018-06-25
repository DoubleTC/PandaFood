<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category_title' => 'Nông sản',
                'category_slug' => str_slug('nong-san')
            ],
            [
                'category_title' => 'Thịt gia súc',
                'category_slug' => str_slug('thit-gia-suc')
            ]
        ];
        DB::table('pdf_categories')->insert($data);
    }
}
