<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user1_applicant_outstanding_accomplishment_type', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->timestamps();
        });

        $this->types();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user1_applicant_outstanding_accomplishment_type');
    }

    private function types() {
        $types = [
            [
                'id' => '1',
                'type' => '2.10a',
                'title' => 'Awards and Recognition'
            ],
            [
                'id' => '2',
                'type' => '2.10b',
                'title' => 'Research and Innovation'
            ],
            [
                'id' => '3',
                'type' => '2.10c',
                'title' => 'Subject Matter Expert / Membership in National TWGs or Commities'
            ],
            [
                'id' => '4',
                'type' => '2.10d',
                'title' => 'Resource Speakership / Learning Facilitation'
            ],
            [
                'id' => '5',
                'type' => '2.10e',
                'title' => 'NEAP Accredited Learning Facilitator'
            ],
        ];

        $i = 0;
        foreach ($types as $key => $value) {
            DB::table('user1_applicant_outstanding_accomplishment_type')->insert($types[$i]);
            $i++;
        }
    }
};
