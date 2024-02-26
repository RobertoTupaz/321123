<?php

namespace App\Models\personel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2Signatory extends Model
{
    protected $guarded = [];

    protected $table = 'user2_signatories';

    use HasFactory;
}
