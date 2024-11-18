<?php

namespace App\Repositories;

use App\Models\Recommendation\Recommendation;
use Illuminate\Database\Eloquent\Model;

class RecommendationRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Recommendation $recommendation)
    {
        $this->model = $recommendation;
    }

    public function createRecommendation(array $data): Recommendation
    {
        return Recommendation::query()->create($data);
    }

    public function updateRecommendation(array $data, Recommendation $recommendation): Recommendation
    {
        $recommendation->update($data);

        return $recommendation;
    }
}
