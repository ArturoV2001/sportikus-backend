<?php

namespace Database\Seeders\data;

use App\Models\UserType\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::insert(
            [
                'name' => 'admin',
            ],
        );
        UserType::insert(
            [
                'name' => 'user',
            ],
        );
    }
}
