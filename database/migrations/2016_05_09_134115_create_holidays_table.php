<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id')->unsigned();
            $table->string('year');
            $table->integer('type_holiday')->comment('Ngỉ phép năm- Nghỉ Cưới- Nghỉ Con đẻ,...');
            $table->integer('total_days')->comment('Tổng số ngày nghỉ');
            $table->boolean('status')->comment('Trạng thái đã được phê duyệt hay chưa');
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
        Schema::drop('holidays');
    }
}
