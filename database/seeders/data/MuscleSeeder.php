<?php

namespace Database\Seeders\data;

use App\Models\Muscle\Muscle;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode('[{"id":1,"name":"Pecho","description":null,"created_at":"2024-11-20 22:53:33","updated_at":"2024-11-20 22:53:33"},{"id":2,"name":"Espalda","description":null,"created_at":"2024-11-20 22:53:43","updated_at":"2023-11-20 22:53:43"},{"id":3,"name":"Hombros","description":null,"created_at":"2024-11-20 22:53:52","updated_at":"2024-11-20 22:53:52"},{"id":4,"name":"Piernas","description":null,"created_at":"2024-11-20 22:54:01","updated_at":"2024-11-20 22:54:02"},{"id":5,"name":"Brazos","description":null,"created_at":"2024-11-20 22:54:18","updated_at":"2024-11-20 22:54:18"}]', true);

        foreach ($data as &$row) {
            $row['created_at'] = Carbon::parse($row['created_at'])->format('Y-m-d H:i:s');
            $row['updated_at'] = Carbon::parse($row['updated_at'])->format('Y-m-d H:i:s');
        }

        Muscle::insert($data);
    }
}
