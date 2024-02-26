<?php

namespace App\Models\personel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableJobs extends Model
{
    protected $guarded = [];

    protected $table = 'available_jobs';

    use HasFactory;
}
