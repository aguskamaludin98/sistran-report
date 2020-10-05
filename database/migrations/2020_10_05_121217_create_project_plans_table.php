<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_plan');
            $table->foreign('id_plan')->references('id')->on('plans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('used_plan');
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
        Schema::dropIfExists('project_plans');
    }
}
