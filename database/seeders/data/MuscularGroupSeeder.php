<?php

namespace Database\Seeders\data;

use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MuscularGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode('[{"id":1,"name":"Empuje","description":null,"created_at":"2024-11-20T22:51:04.000000Z","updated_at":"2024-11-20T22:51:05.000000Z"},{"id":2,"name":"Jalón","description":null,"created_at":"2024-11-20T22:51:21.000000Z","updated_at":"2024-11-20T22:51:21.000000Z"},{"id":3,"name":"Pierna","description":null,"created_at":"2024-11-20T22:51:31.000000Z","updated_at":"2024-11-20T22:51:31.000000Z"}]', true);

        // Convertir las fechas al formato 'Y-m-d H:i:s'
        foreach ($data as &$row) {
            $row['created_at'] = Carbon::parse($row['created_at'])->format('Y-m-d H:i:s');
            $row['updated_at'] = Carbon::parse($row['updated_at'])->format('Y-m-d H:i:s');
        }

        // Insertar los datos en la tabla muscular_groups
        MuscularGroup::insert($data);
    }
}
