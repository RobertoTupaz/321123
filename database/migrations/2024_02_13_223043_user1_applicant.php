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
        Schema::create('user1_applicant', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix_name') ->nullable();
            $table->string('sex');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('age');
            $table->string('street') ->nullable();
            $table->string('barangay') ->nullable();
            $table->string('city_municipality') -> default('Malaybalay City');
            $table->string('province') -> default('Bukidnon');
            $table->string('civil_status') ->default('none');
            $table->string('religion') ->nullable();
            $table->string('disability') ->nullable();
            $table->string('ethnic_group') ->nullable();
            $table->string('contact_number') ->nullable();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('personal_info_updated')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user1_applicant');
    }
};
