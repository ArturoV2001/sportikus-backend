<?php

namespace App\Models\Gender;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'genders';

    protected $fillable = [
        'name',
    ];
}
