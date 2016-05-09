<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayoffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayoffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id')->unsigned();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('description');
            $table->integer('status')->comment('Phải được các bộ phận quản lý duyệt');
            $table->integer('type')->comment('Kiểu là xin phép nghỉ hay quên checkin, checkout');

            $table->foreign('staff_id')->references('id')->on('staff');
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
        Schema::drop('dayoffs');
    }
}
