<?php

namespace App\Models\BiometricData;

use Database\Factories\BiometricDataFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiometricData extends Model
{
    use HasFactory;
    use SoftDeletes;
    use BiometricDataRelationships;
    use BiometricDataScopes;

    protected $table = 'biometric_data';

    protected $fillable = [
        'user_id',
        'heart_frequency',
        'pressure',
        'calories',
        'sleep_quality',
        'sleep_minutes',
        'steps',
    ];

    public static function newFactory()
    {
        return BiometricDataFactory::new();
    }
}
