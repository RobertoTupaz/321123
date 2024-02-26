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
        Schema::create('user1_applicant_performance_rating', function (Blueprint $table) {
            $table->id();
            $table->string('user1_applicant_id') ->nullable();
            $table->string('employer_or_company') ->nullable();
            $table->string('year') ->nullable();
            $table->string('rating') ->nullable();
            $table->string('document') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user1_applicant_performance_rating');
    }
};
