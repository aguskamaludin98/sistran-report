<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date');
            $table->string('weather');
            $table->string('temperature');
            $table->string('wind');
            $table->string('humidity');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('work_hours');
            $table->unsignedInteger('id_project_plan');
            $table->foreign('id_project_plan')->references('id')->on('project_plans')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_project_equipment');
            $table->foreign('id_project_equipment')->references('id')->on('project_equipments')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_project_job_description');
            $table->foreign('id_project_job_description')->references('id')->on('project_job_descriptions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_project_progres');
            $table->foreign('id_project_progres')->references('id')->on('project_progres')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_project_problem');
            $table->foreign('id_project_problem')->references('id')->on('project_problems')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_visitor');
            $table->foreign('id_visitor')->references('id')->on('visitors')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_progress_photo');
            $table->foreign('id_progress_photo')->references('id')->on('progress_photos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('daily_reports');
    }
}
