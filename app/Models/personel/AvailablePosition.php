<?php

namespace App\Models\personel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailablePosition extends Model
{
    protected $guarded = [];

    protected $table = 'user2_available_position';

    use HasFactory;
}
