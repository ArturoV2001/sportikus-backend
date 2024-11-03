<?php

namespace App\Models\AilmentUser;

use App\Models\Ailment\AilmentScopes;
use Database\Factories\AilmentUserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AilmentUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    use AilmentUserScopes;
    use AilmentUserRelationships;

    protected $table = 'ailment_user';

    protected $fillable = [
        'user_id',
        'ailment_id'
    ];

    public static function newFactory()
    {
        return AilmentUserFactory::new();
    }

}
