<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectJobDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_job_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_job_description');
            $table->foreign('id_job_descriptiono')->references('id')->on('job_descriptions')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('job_description_qty');
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
        Schema::dropIfExists('project_job_descriptions');
    }
}
