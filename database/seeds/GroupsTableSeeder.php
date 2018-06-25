<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
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
                'group_name' => 'Quản trị viên'
            ],
            [
                'group_name' => 'Khách hàng'
            ]

        ];
        DB::table('pdf_groups')->insert($data);
    }
}
