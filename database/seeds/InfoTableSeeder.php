<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
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
                'info_name' => 'PandaFood',
                'info_title' => 'PandaFood',
                'info_phone' => '01663971006',
                'info_email' => 'doubletcgaming@gmail.com',
                'info_address' => '15 Ngô Thì Nhậm',
                'info_imgmain' => '646464624624.png',
                'info_imgtitle' => '646464624624.png',
                'info_facebook' => 'Chưa có',
                'info_googleplus' => 'Chưa có',
                'info_embedcode' => 'Chưa có',
                'info_owner' => 'DoubleTC',
                'info_keywords' => 'pandafood, doubletc',
                'info_description' => 'PandaFood'
            ],
        ];
        DB::table('pdf_information')->insert($data);
    }
}
