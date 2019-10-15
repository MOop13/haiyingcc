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
        DB::table('category')->insert(
            array(
                array(
                    'name' => '军事',
                    'is_show' => 1,
                ),
                array(
                    'name' => '政治',
                    'is_show' => 1,
                )
            )
        );
    }
}
