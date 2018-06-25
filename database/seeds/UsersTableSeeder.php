<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'user_name' => 'admin',
                'user_password' => bcrypt('admin'),
                'user_email' => 'doubletcgaming@gmail.com',
                'user_fullname' => 'Hoàng Công Thành',
                'user_phone' => '01663971006',
                'user_address' => '15 Ngô Thì Nhậm, P. Quang Trung, TP. Thái Bình',
                'group_id' => '1'
            ],
            [
                'user_name' => 'khach',
                'user_password' => bcrypt('khach'),
                'user_email' => 'superchip1020@gmail.com',
                'user_fullname' => 'Hoàng Công Thành',
                'user_phone' => '01663971006',
                'user_address' => '15 Ngô Thì Nhậm, P. Quang Trung, TP. Thái Bình',
                'group_id' => '2'
            ]

        ];
        DB::table('pdf_users')->insert($data);
    }
}
