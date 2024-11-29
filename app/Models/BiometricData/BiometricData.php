<?php

namespace App\Models\BiometricData;

use App\Models\Traits\WithAliasScopes;
use Database\Factories\BiometricDataFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiometricData extends Model
{
    use BiometricDataRelationships;
    use BiometricDataScopes;
    use HasFactory;
    use SoftDeletes;
    use WithAliasScopes;

    protected $table = 'biometric_data';

    protected $fillable = [
        'user_id',
        'heart_frequency',
        'steps',
        'distance',
        'oxygenation',
        'sleep_quantity',
        'sleep_quality_awake',
        'sleep_quality_rem',
        'sleep_quality_core',
        'sleep_quality_deep',
    ];

    public static function newFactory()
    {
        return BiometricDataFactory::new();
    }
}
