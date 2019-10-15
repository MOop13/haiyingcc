<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id')->comment('id, 自增');
            $table->string('title')->comment('标题');
            $table->string('author')->comment('作者');
            $table->string('pic_url')->comment('图片链接');
            $table->binary('content')->comment('内容');
            $table->integer('article_click')->comment('文章点击数');
            $table->integer('article_category')->comment('文章分类');
            $table->integer('tag')->comment('文章标签');
            $table->integer('is_up')->comment('是否制定');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
