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
            $table->string('mobile');
            $table->string('location');
            $table->string('gender');
            $table->string('picture')->nullable();
            $table->date('birthday')->nullable();
            $table->longText('bio')->nullable();
            $table->integer('department_id')->unsigned()->comment('Phòng ban của nhân viên đó');
            $table->foreign('department_id')->references('id')->on('department');
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
        Schema::table('staff', function (Blueprint $table) {
            Schema::drop('staff');
            //
        });
    }
}
