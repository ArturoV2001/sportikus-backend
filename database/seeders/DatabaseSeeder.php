<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User\User;
use Database\Seeders\data\AilmentSeeder;
use Database\Seeders\data\ExerciseSeeder;
use Database\Seeders\data\MuscleSeeder;
use Database\Seeders\data\MuscularGroupSeeder;
use Database\Seeders\data\UserTypeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        //Run the seeders
        $this->call([
           UserTypeSeeder::class,
           MuscleSeeder::class,
           MuscularGroupSeeder::class,
           AilmentSeeder::class,
           ExerciseSeeder::class,
        ]);

        //Create admin user
        User::query()->create([
            'id' => 1,
            'email' => 'admin.user@sportikus.com',
            'password' => 'admin@1234',
            'name' => 'Administrador',
            'last_name' => 'Usuario',
            'weight' => 100,
            'birthdate' => now(),
            'user_type_id' => 1,
        ]);
    }
}
