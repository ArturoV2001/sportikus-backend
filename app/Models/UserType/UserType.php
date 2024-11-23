<?php

namespace App\Models\UserType;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use UserTypeScopes;
    use UserTypeRelationships;

    protected $table = 'user_types';

    protected $fillable = [
        'name',
    ];
}
