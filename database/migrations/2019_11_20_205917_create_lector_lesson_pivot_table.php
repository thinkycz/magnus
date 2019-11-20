<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLectorLessonPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lector_lesson', function (Blueprint $table) {
            $table->bigInteger('lector_id')->unsigned()->index();
            $table->foreign('lector_id')->references('id')->on('lectors')->onDelete('cascade');
            $table->bigInteger('lesson_id')->unsigned()->index();
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->primary(['lector_id', 'lesson_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lector_lesson');
    }
}
