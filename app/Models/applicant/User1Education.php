<?php

namespace App\Models\applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1Education extends Model
{
    protected $guarded = [];

    protected $table = 'user1_applicant_education';

    use HasFactory;
}
