<?php

namespace App\Models\Category;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CategoryRelationships;
    use CategoryScopes;

    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}
