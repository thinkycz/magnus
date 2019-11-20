<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomLectorPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_lector', function (Blueprint $table) {
            $table->bigInteger('classroom_id')->unsigned()->index();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->bigInteger('lector_id')->unsigned()->index();
            $table->foreign('lector_id')->references('id')->on('lectors')->onDelete('cascade');
            $table->primary(['classroom_id', 'lector_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_lector');
    }
}
