<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('training_group')->comment('группа');
            $table->integer('year')->comment('Год');
            $table->string('full_name_student')->comment('ФИО студента');
            $table->string('full_name_teacher')->comment('ФИО научного руководителя');
            $table->string('topic')->comment('Тема ВКР');
            $table->integer('mark')->comment('оценка');

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
        Schema::dropIfExists('trackings');
    }
}
