<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Timesheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheet', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('check_in');
            $table->dateTime('check_out')->nullable();
            $table->decimal('work_time', 2, 1);
            $table->integer('client')->comment('Máy chấm nhận công này');
            $table->integer('staff_id')->unsigned()->comment('Nhân viên nào?');
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
        Schema::table('timesheet', function (Blueprint $table) {
            Schema::drop('timesheet');
            //
        });
    }
}
