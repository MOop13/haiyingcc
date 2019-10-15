<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id')->comment('id,自增');
            $table->string('name')->comment('类型名称');
            $table->integer('is_show')->comment('是否显示');
            $table->timestamp('created_at')->nullable()->comment('创建日期');
            $table->timestamp('updated_at')->nullable()->comment('修改日期');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
