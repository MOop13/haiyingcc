<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id')->comment('id, 自增');
            $table->string('url')->comment('url地址');
            $table->string('belong_to')->comment('所属文章id');
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
        Schema::dropIfExists('gallery');
    }
}
