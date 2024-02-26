<?php

namespace App\Models\applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1LD extends Model
{
    protected $guarded = [];

    protected $table = 'user1_applicant_ld_last_promotion';

    use HasFactory;
}
