<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id')->comment('id, 自增');
            $table->integer('article_id')->comment('文章id');
            $table->integer('user_id')->comment('用户id');
            $table->string('guest_comment')->comment('游客评论');
            $table->string('guest_name')->comment('游客姓名');
            $table->string('guest_email')->comment('游客邮件');
            $table->timestamp('created_at')->comment('创建日期');
            $table->timestamp('updated_at')->comment('修改日期');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
