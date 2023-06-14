<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cnic');
            $table->string('mobile');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('martial_status');
            $table->string('current_organization');
            $table->string('current_position');
            $table->string('job_start_date');
            $table->string('job_end_date');
            $table->string('current_sallary');
            $table->string('expected_sallery');
            $table->string('job_status');
            $table->string('archievement');
            $table->string('image');
            $table->string('matric_subject');
            $table->string('matric_passing_year');
            $table->string('matric_percentage');
            $table->string('matric_grade');
            $table->string('inter_subject');
            $table->string('inter_passing_year');
            $table->string('inter_percentage');
            $table->string('inter_grade');
            $table->string('university_subject');
            $table->string('university_passing_year');
            $table->string('university_percentage');
            $table->string('university_grade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
