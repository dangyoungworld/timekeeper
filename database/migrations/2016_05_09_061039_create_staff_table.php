<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
//            $table->string('email');
            $table->string('mobile');
            $table->string('location');
            $table->string('gender');
            $table->longText('bio')->nullable();
            $table->integer('salary')->comment('Bảng lương của nhân viên đó');
            $table->integer('department')->comment('Phòng ban của nhân viên đó');
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
        Schema::table('staff', function (Blueprint $table) {
            Schema::drop('staff');
            //
        });
    }
}
