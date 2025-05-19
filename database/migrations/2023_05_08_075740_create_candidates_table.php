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
                $table->string('user_id')->nullable();
                $table->string('address')->nullable();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('cnic')->nullable();
                $table->string('mobile')->nullable();
                $table->string('other_number')->nullable();
                $table->string('date_of_birth')->nullable();
                $table->string('gender')->nullable();
                $table->string('religion')->nullable();
                $table->string('martial_status')->nullable();
                $table->string('current_organization')->nullable();
                $table->string('current_position')->nullable();
                $table->string('last_job')->nullable();
                $table->string('job_start_date')->nullable();
                $table->string('job_end_date')->nullable();
                $table->string('current_sallary')->nullable();
                $table->string('expected_sallery')->nullable();
                $table->string('job_status')->nullable();
                $table->string('archievement')->nullable();
                $table->string('image')->nullable();
                $table->string('matric_subject')->nullable();
                $table->string('matric_passing_year')->nullable();
                $table->string('matric_percentage')->nullable();
                $table->string('matric_grade')->nullable();
                $table->string('inter_subject')->nullable();
                $table->string('inter_passing_year')->nullable();
                $table->string('inter_percentage')->nullable();
                $table->string('inter_grade')->nullable();
                $table->string('university_subject')->nullable();
                $table->string('university_passing_year')->nullable();
                $table->string('university_percentage')->nullable();
                $table->string('university_grade')->nullable();
                $table->string('time_from_last_job')->nullable();
                $table->string('time_to_last_job')->nullable();
                $table->string('current_status_job')->nullable();
                $table->string('last_sallery')->nullable();
                $table->string('last_post')->nullable();
                $table->string('job_post')->nullable();
                $table->string('any_archivement')->nullable();
                $table->string('refrence_by')->nullable();
                $table->string('language')->nullable();
                $table->string('office_address')->nullable();
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
