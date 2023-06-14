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
        Schema::create('consents', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_id');
            $table->string('status')->nullable();
            $table->string('time')->nullable();
            $table->longText('reasons')->nullable();
            $table->string('training_date_to')->nullable();
            $table->string('training_date_from')->nullable();
            $table->string('refrence_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consents');
    }
};
