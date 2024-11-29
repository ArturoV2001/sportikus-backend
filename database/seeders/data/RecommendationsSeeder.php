<?php

namespace Database\Seeders\data;

use App\Models\Recommendation\Recommendation;
use Illuminate\Database\Seeder;

class RecommendationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recommendation::query()->insert([
            ['id' => 1, 'recommendation' => 'Tu frecuencia cardíaca es muy baja. Considera consultar con un médico si te sientes fatigado o mareado.'],
            ['id' => 2, 'recommendation' => 'Tu frecuencia cardíaca está ligeramente baja. Realiza ejercicios cardiovasculares moderados para fortalecer tu sistema cardiovascular.'],
            ['id' => 3, 'recommendation' => 'Tu frecuencia cardíaca está en un rango óptimo para la hipertrofia. Mantén la intensidad actual.'],
            ['id' => 4, 'recommendation' => 'Tu frecuencia cardíaca es alta. Incrementa el descanso entre series o reduce la carga si sientes fatiga.'],
            ['id' => 5, 'recommendation' => 'Tu frecuencia cardíaca es muy alta. Considera realizar ejercicios de menor intensidad y consulta a un médico si persiste.'],
            ['id' => 6, 'recommendation' => 'Estás caminando poco durante el día. Intenta alcanzar al menos 5000 pasos diarios para mejorar tu salud general.'],
            ['id' => 7, 'recommendation' => 'Tu actividad diaria es moderada. Intenta caminar un poco más para apoyar la recuperación muscular.'],
            ['id' => 8, 'recommendation' => 'Estás alcanzando un buen nivel de actividad diaria. Esto contribuye a tu salud general y recuperación.'],
            ['id' => 9, 'recommendation' => 'Tu actividad diaria es excelente. Asegúrate de mantener un balance entre cardio y fuerza para maximizar la hipertrofia.'],
            ['id' => 10, 'recommendation' => 'Estás recorriendo poca distancia diaria. Intenta incorporar caminatas para mejorar la circulación.'],
            ['id' => 11, 'recommendation' => 'Tu distancia recorrida es adecuada para mantener un estilo de vida activo. Mantén este ritmo.'],
            ['id' => 12, 'recommendation' => 'Estás recorriendo una buena distancia diaria. Si estás en déficit calórico, considera reducir el cardio para evitar interferencias en la hipertrofia.'],
            ['id' => 13, 'recommendation' => 'Estás recorriendo una distancia muy alta. Esto puede afectar la recuperación muscular. Reduce la distancia si buscas hipertrofia.'],
            ['id' => 14, 'recommendation' => 'Tu saturación de oxígeno es críticamente baja. Consulta con un médico de inmediato.'],
            ['id' => 15, 'recommendation' => 'Tu saturación de oxígeno es baja. Asegúrate de realizar ejercicios de respiración y evitar entrenamientos de alta intensidad.'],
            ['id' => 16, 'recommendation' => 'Tu saturación de oxígeno está en un rango normal. Es óptima para entrenar con intensidad.'],
            ['id' => 17, 'recommendation' => 'Tu saturación de oxígeno es excelente. Esto indica una buena capacidad aeróbica.'],
            ['id' => 18, 'recommendation' => 'Estás durmiendo menos de 6 horas. Esto puede afectar tu recuperación y rendimiento. Prioriza dormir más.'],
            ['id' => 19, 'recommendation' => 'Estás durmiendo poco pero casi alcanzas el mínimo recomendado. Intenta dormir al menos 7 horas para maximizar la recuperación muscular.'],
            ['id' => 20, 'recommendation' => 'Tu cantidad de sueño es excelente. Esto es ideal para la recuperación muscular y hormonal.'],
            ['id' => 21, 'recommendation' => 'Estás durmiendo mucho. Asegúrate de que el sueño sea de calidad para maximizar sus beneficios.'],
            ['id' => 22, 'recommendation' => 'El tiempo de sueño profundo es bajo. Evita comidas pesadas y pantallas antes de dormir.'],
            ['id' => 23, 'recommendation' => 'Tu sueño profundo es adecuado. Mantén buenas prácticas de higiene del sueño.'],
            ['id' => 24, 'recommendation' => 'Tienes un excelente tiempo de sueño profundo. Esto favorece la recuperación muscular.'],
            ['id' => 25, 'recommendation' => 'Pasas mucho tiempo despierto durante el sueño. Intenta mejorar tu entorno de descanso eliminando distracciones.'],
            ['id' => 26, 'recommendation' => 'Tu tiempo despierto durante el sueño está en niveles normales. Esto es ideal para una recuperación completa.'],
            ['id' => 27, 'recommendation' => 'Tu sueño REM es bajo. Intenta mejorar la calidad del sueño para optimizar la memoria y la recuperación hormonal.'],
            ['id' => 28, 'recommendation' => 'Tu sueño REM es adecuado. Esto ayuda a tu recuperación y funciones cognitivas.'],
            ['id' => 29, 'recommendation' => 'Tienes un excelente tiempo de sueño REM. Es ideal para la recuperación mental y física.'],
            ['id' => 30, 'recommendation' => '¡Tus signos biométricos están estables! Continúa con tu rutina actual y mantén un estilo de vida saludable.'],
        ]);

    }
}
