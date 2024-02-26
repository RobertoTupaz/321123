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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->string('application_id');
            $table->string('job_id');
            $table->string('user1_applicant_id');
            $table->boolean('is_teacher_1') -> default(false);
            $table->string('letter_of_intent');
            $table->string('academic_level') -> nullable();
            $table->string('specialty') -> nullable();
            $table->string('date_evaluated') -> nullable();
            $table->string('remarks') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
