<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id')->comment('id, 自增');
            $table->string('name')->comment('名称');
            $table->integer('type')->comment('类型');
            $table->string('description')->comment('描述');
            $table->string('path')->comment('路径');
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
        Schema::dropIfExists('video');
    }
}
