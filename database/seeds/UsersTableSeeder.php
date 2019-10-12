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
        DB::table('users')->insert(
            array(
                array(
                    'user_name' => 'PeterRomeoOrpheus',
                    'nick_name' => 'P.Romeo.O',
                    'email'=>'1024245303@qq.com',
                    'mobile' => '18911820000',
                    'gender' => '1',
                    'password' => md5('123456')
                ),
                array(
                    'user_name' => 'haiyingcc',
                    'nick_name' => 'haiyingcc',
                    'email'=>'0066@qq.com',
                    'mobile' => '18911820000',
                    'gender' => '1',
                    'password' => md5('123456')
                )
            ));
    }

   /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->delete();
    }
}
