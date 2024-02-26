<?php

namespace App\Models\personel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User2Personel extends Authenticatable
{
    protected $guarded = [];

    protected $table = 'user2_personel';

    use HasFactory;
}
