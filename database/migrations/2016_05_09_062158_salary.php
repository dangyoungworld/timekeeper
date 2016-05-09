<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->increments('id');
            $table->date('from_time')->comment('Thời gian bắt đầu áp dụng mức lương');
            $table->date('end_time')->nullable()->comment('Thời gian kết thúc áp dụng mức lương này');
            $table->integer('staff_id')->unsigned()->comment('Của nhân viên nào');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->decimal('salary');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('salary', function (Blueprint $table) {
            //
            Schema::drop('salary');
        });
    }
}
