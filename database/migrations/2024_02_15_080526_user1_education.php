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
        Schema::create('user1_applicant_education', function (Blueprint $table) {
            $table->id();
            $table->string('user1_applicant_id');
            $table->string('educational_attainment');
            $table->string('units');
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user1_applicant_education');
    }
};
