<?php

namespace App\Models\AilmentUser;

use Database\Factories\AilmentUserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AilmentUser extends Model
{
    use AilmentUserRelationships;
    use AilmentUserScopes;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ailment_user';

    protected $fillable = [
        'user_id',
        'ailment_id',
    ];

    public static function newFactory()
    {
        return AilmentUserFactory::new();
    }
}
