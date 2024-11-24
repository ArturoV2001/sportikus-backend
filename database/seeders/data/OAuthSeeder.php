<?php

namespace Database\Seeders\data;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use OAuth;

class OAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oauth_clients')->insert([
            [
                'id' => 1,
                'user_id' => null,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'ubolhTEh1xWK5CMBr7sHPDd1dRmxzFeHCXYdw9M7',
                'provider' => null,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2024-11-24 03:38:17',
                'updated_at' => '2024-11-24 03:38:17',
            ],
            [
                'id' => 2,
                'user_id' => null,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'XrA2QZL00m1b0uLJ2seTCMsYmJR6CfvTnRkkUJfp',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2024-11-24 03:38:17',
                'updated_at' => '2024-11-24 03:38:17',
            ],
        ]);
        DB::table('oauth_personal_access_clients')->insert([
            [
                'id' => 1,
                'client_id' => 1,
                'created_at' => '2024-11-24 03:38:17',
                'updated_at' => '2024-11-24 03:38:17',
            ],
        ]);
    }
}
