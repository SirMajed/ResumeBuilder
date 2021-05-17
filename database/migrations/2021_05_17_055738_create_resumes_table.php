<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('university');
            $table->string('gpa');
            $table->string('graduation_date');
            $table->string('skills');
            $table->string('exp_name');
            $table->string('exp_company');
            $table->string('exp_description');
            $table->string('certificate_name');
            $table->string('certificate_issuer');
            $table->string('certificate_date');
            $table->string('language');
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
        Schema::dropIfExists('resumes');
    }
}
