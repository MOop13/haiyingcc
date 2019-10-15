<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert(
            array(
                array(
                    'article_id' => 1,
                    'user_id' => 1,
                    'guest_comment' => '这个文章不错',
                    'guest_name' => 'P.ROMEO.O',
                    'guest_email' => '1024245303@qq.com',
                    'created_at' => time(),
                    'updated_at' => time(),
                ),
                array(
                    'article_id' => 2,
                    'user_id' => 2,
                    'guest_comment' => '什么意思?',
                    'guest_name' => 'P.ROMEO.O',
                    'guest_email' => '1024245303@qq.com',
                    'created_at' => time(),
                    'updated_at' => time(),
                )
            )
        );
    }
}
