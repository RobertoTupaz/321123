<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *  Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user2_signatories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('annex_e_and_annex_f') -> nullable();
            $table->string('initial_evaluation_result') -> nullable();
            $table->string('hrmpsb_chair') -> nullable();
            $table->string('hrmpsb_member') -> nullable();
            $table->string('hrmpsb_secretariat') -> nullable();
            $table->timestamps();
        });
    }

    /**
     *  Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user2_signatories');
    }
};
