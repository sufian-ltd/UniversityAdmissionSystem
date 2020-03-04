<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('roll_no');
            $table->integer('reg_no');
            $table->string('group');
            $table->string('name');
            $table->string('center');
            $table->string('institution');
            $table->string('std_type');
            $table->string('passing_year');
            $table->string('ssc_hsc');
            $table->float('gpa');
            $table->string('grade');
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
