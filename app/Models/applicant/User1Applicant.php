<?php

namespace App\Models\applicant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User1Applicant extends Authenticatable
{
    protected $guarded = [];

    protected $table = 'user1_applicant';

    use HasFactory;
}
