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
        Ailment::query()->insert([
            [
                'id' => 1,
                'name' => 'Artritis',
                'description' => 'Inflamación de las articulaciones que puede causar dolor, hinchazón y rigidez, limitando el movimiento. Puede ser crónica y progresiva.',
                'cronic' => 1,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'Las rutinas están diseñadas para reducir la inflamación, mejorar la movilidad articular y fortalecer los músculos de soporte mediante ejercicios de bajo impacto y movimientos controlados. Se recomienda evitar cargas pesadas, incorporar calentamientos y realizar estiramientos para mantener la flexibilidad.',
            ],
            [
                'id' => 2,
                'name' => 'Tendinitis',
                'description' => 'Inflamación de los tendones que puede causar dolor, sensibilidad y debilidad en la zona afectada, especialmente durante el movimiento. Puede ser aguda o crónica.',
                'cronic' => 0,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'El objetivo es fortalecer los tendones afectados sin sobrecargarlos, a través de ejercicios moderados y controlados. Es fundamental evitar movimientos repetitivos o bruscos, realizar pausas entre ejercicios y mantener una técnica precisa para evitar lesiones.',
            ],
            [
                'id' => 3,
                'name' => 'Hernias',
                'description' => 'Protrusión de tejido a través de una abertura en la pared muscular, causando dolor, debilidad y posibles complicaciones si afecta los nervios o la médula espinal. Puede ser crónica.',
                'cronic' => 1,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'Las rutinas buscan fortalecer la musculatura sin aumentar la presión intraabdominal ni sobrecargar la columna, utilizando ejercicios de bajo impacto y con soporte. Se recomienda evitar esfuerzos excesivos, movimientos explosivos y trabajar en rangos de movimiento seguros.',
            ],
            [
                'id' => 4,
                'name' => 'Asma',
                'description' => 'Trastorno respiratorio crónico que causa constricción de las vías respiratorias, dificultando la respiración durante el ejercicio. Puede limitar la capacidad de resistencia y la intensidad del entrenamiento.',
                'cronic' => 1,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'Las rutinas están orientadas a mejorar la capacidad aeróbica y la eficiencia respiratoria mediante ejercicios moderados y pausas frecuentes. Se sugiere evitar actividades de alta intensidad y realizar el entrenamiento en ambientes frescos y bien ventilados.',
            ],
            [
                'id' => 5,
                'name' => 'Diabetes',
                'description' => 'Trastorno metabólico que afecta el nivel de azúcar en la sangre, lo que puede provocar fatiga, debilidad muscular y problemas de recuperación. Requiere manejo constante.',
                'cronic' => 1,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'El objetivo es mejorar la sensibilidad a la insulina y controlar los niveles de glucosa mediante una combinación de ejercicios aeróbicos y de fuerza. Es importante mantener una intensidad moderada, monitorear los niveles de glucosa antes y después de las rutinas, y asegurar una hidratación adecuada.',
            ],
            [
                'id' => 6,
                'name' => 'Depresión y ansiedad',
                'description' => 'Trastornos de salud mental que pueden afectar la motivación, la energía y el estado de ánimo, limitando la consistencia y el rendimiento en el entrenamiento.',
                'cronic' => 1,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'Estas rutinas promueven la liberación de endorfinas y mejoran el bienestar emocional con ejercicios dinámicos, variados y motivadores. Se recomienda evitar rutinas monótonas o demasiado intensas, priorizando movimientos que mantengan el interés y el entusiasmo.',
            ],
            [
                'id' => 7,
                'name' => 'Trastornos del sueño',
                'description' => 'Problemas como el insomnio o la apnea del sueño que afectan la calidad y la duración del sueño, lo que puede provocar fatiga, dificultades en la recuperación muscular y disminución de los niveles de energía.',
                'cronic' => 1,
                'created_at' => null,
                'updated_at' => null,
                'deleted_at' => null,
                'routine_description' => 'Las rutinas están enfocadas en promover la relajación y reducir el estrés mediante ejercicios moderados realizados temprano en el día. Se recomienda incluir estiramientos y técnicas de respiración para facilitar el descanso y mejorar la calidad del sueño.',
            ],
        ]);

    }
}
