<?php

namespace App\Repositories;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends IndexRepository
{
    public Model $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function createUser(array $data): User
    {
        return User::query()->create($data);
    }

    public function updateUser(array $data, User $user ): User
    {
        $user->update($data);
        return $user;
    }
}
