<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('id, 自增');
            $table->string('nick_name')->comment('昵称');
            $table->string('user_name')->comment('用户名称');
            $table->string('email')->unique()->comment('用户邮件');
            $table->integer('gender')->default(1)->comment('性别');
            $table->string('password')->comment('密码');
            $table->string('mobile')->comment('手机号');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
