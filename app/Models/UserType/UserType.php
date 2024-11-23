<?php

namespace App\Models\UserType;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use UserTypeRelationships;
    use UserTypeScopes;

    protected $table = 'user_types';

    protected $fillable = [
        'name',
    ];
}
