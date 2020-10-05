<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_problems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_problem');
            $table->foreign('id_problem')->references('id')->on('problems')->onUpdate('cascade')->onDelete('cascade');
            $table->string('problem_status');
            $table->text('explanation');
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
        Schema::dropIfExists('project_problems');
    }
}
