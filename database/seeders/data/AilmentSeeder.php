<?php

namespace Database\Seeders\data;

use App\Models\Ailment\Ailment;
use Illuminate\Database\Seeder;

class AilmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode('[{"id":1,"name":"Artritis","description":"Inflamación de las articulaciones que puede causar dolor, hinchazón y rigidez, limitando el movimiento. Puede ser crónica y progresiva.","cronic":1,"created_at":null,"updated_at":null,"deleted_at":null},{"id":2,"name":"Tendinitis","description":"Inflamación de los tendones que puede causar dolor, sensibilidad y debilidad en la zona afectada, especialmente durante el movimiento. Puede ser aguda o crónica.","cronic":0,"created_at":null,"updated_at":null,"deleted_at":null},{"id":3,"name":"Hernias","description":"Protrusión de tejido a través de una abertura en la pared muscular, causando dolor, debilidad y posibles complicaciones si afecta los nervios o la médula espinal. Puede ser crónica.","cronic":1,"created_at":null,"updated_at":null,"deleted_at":null},{"id":4,"name":"Asma","description":"Trastorno respiratorio crónico que causa constricción de las vías respiratorias, dificultando la respiración durante el ejercicio. Puede limitar la capacidad de resistencia y la intensidad del entrenamiento.","cronic":1,"created_at":null,"updated_at":null,"deleted_at":null},{"id":5,"name":"Diabetes","description":"Trastorno metabólico que afecta el nivel de azúcar en la sangre, lo que puede provocar fatiga, debilidad muscular y problemas de recuperación. Requiere manejo constante.","cronic":1,"created_at":null,"updated_at":null,"deleted_at":null},{"id":6,"name":"Depresión y ansiedad","description":"Trastornos de salud mental que pueden afectar la motivación, la energía y el estado de ánimo, limitando la consistencia y el rendimiento en el entrenamiento.","cronic":1,"created_at":null,"updated_at":null,"deleted_at":null},{"id":7,"name":"Trastornos del sueño","description":"Problemas como el insomnio o la apnea del sueño que afectan la calidad y la duración del sueño, lo que puede provocar fatiga, dificultades en la recuperación muscular y disminución de los niveles de energía.","cronic":1,"created_at":null,"updated_at":null,"deleted_at":null}]', true);

        // Insertar los datos en la tabla 'ailments'
        Ailment::insert($data);
    }
}
