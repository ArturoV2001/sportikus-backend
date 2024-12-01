<?php

namespace App\Repositories;

use App\Models\RecommendationUser\RecommendationUser;
use Illuminate\Database\Eloquent\Model;

class RecommendationUserRepository extends IndexRepository
{
    public Model $model;

    public function __construct(RecommendationUser $recommendationUser)
    {
        $this->model = $recommendationUser;
    }

    public function createRecommendationUser(array $data): RecommendationUser
    {
        return RecommendationUser::query()->create($data);
    }

    public function updateRecommendationUser(array $data, RecommendationUser $recommendationUser): RecommendationUser
    {
        $recommendationUser->update($data);

        return $recommendationUser;
    }
}
