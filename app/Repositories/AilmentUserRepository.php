<?php

namespace App\Repositories;

use App\Models\AilmentUser\AilmentUser;
use Illuminate\Database\Eloquent\Model;

class AilmentUserRepository extends IndexRepository
{
    public Model $model;

    public function __construct(AilmentUser $ailmentUser)
    {
        $this->model = $ailmentUser;
    }

    public function createAilmentUser(array $data): AilmentUser
    {
        return AilmentUser::query()->create($data);
    }

    public function updateAilmentUser(array $data, AilmentUser $ailmentUser ): AilmentUser
    {
        $ailmentUser->update($data);
        return $ailmentUser;
    }
}
