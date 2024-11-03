<?php

namespace App\Repositories;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function createCategory(array $data): Category
    {
        return Category::query()->create($data);
    }

    public function updateCategory(array $data, Category $category): Category
    {
        $category->update($data);
        return $category;
    }
}
