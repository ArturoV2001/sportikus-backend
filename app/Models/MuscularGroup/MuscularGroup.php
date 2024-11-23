<?php

namespace App\Models\MuscularGroup;

use Database\Factories\MuscularGroupFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MuscularGroup extends Model
{
    use HasFactory;
    use MuscularGroupRelationships;
    use MuscularGroupScopes;

    protected $table = 'muscular_groups';

    protected $fillable = [
        'name',
        'description',
    ];

    protected static function newFactory()
    {
        return MuscularGroupFactory::new();
    }
}
