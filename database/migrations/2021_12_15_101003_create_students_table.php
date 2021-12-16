<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('admission');
            $table->string('course');
            $table->string('unit1');
            $table->string('marks1');
            $table->string('unit2');
            $table->string('marks2');
             $table->string('unit3');
            $table->string('marks3');
            $table->string('unit4');
            $table->string('marks4');
            $table->string('unit5');
            $table->string('marks5');
            $table->text('comment');
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
        Schema::dropIfExists('students');
    }
}
