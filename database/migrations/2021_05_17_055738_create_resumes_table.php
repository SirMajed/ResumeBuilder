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
            $table->string('name')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('email')->nullable();
            $table->string('bio')->nullable();
            $table->string('degree')->nullable();
            $table->string('university')->nullable();
            $table->string('gpa')->nullable();
            $table->string('graduation_date')->nullable();
            $table->string('skills')->nullable();
            $table->string('exp_name')->nullable();
            $table->string('exp_company')->nullable();
            $table->string('exp_description')->nullable();
            $table->string('certificate_name')->nullable();
            $table->string('certificate_issuer')->nullable();
            $table->string('certificate_date')->nullable();
            $table->string('native_language')->nullable();
            $table->string('other_language')->nullable();
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
