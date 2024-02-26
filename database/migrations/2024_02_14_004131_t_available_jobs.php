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
        Schema::create('available_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('type');
            $table->string('category') ->nullable();
            $table->string('education');
            $table->string('experience');
            $table->longText('plantilla_item_no');
            $table->string('training');
            $table->string('eligibility');
            $table->string('salary_grade');
            $table->string('monthly_salary');
            $table->string('competency')->nullable();
            $table->string('place_of_assignment');
            $table->string('posting_date');
            $table->string('closing_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_jobs');
    }
};
