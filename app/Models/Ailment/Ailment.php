<?php

namespace App\Models\Ailment;

use Database\Factories\AilmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ailment extends Model
{
    use AilmentRelationships;
    use AilmentScopes;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ailments';

    protected $fillable = [
        'name',
        'description',
        'cronic',
    ];

    public static function newFactory()
    {
        return AilmentFactory::new();
    }
}
