
# Sportikus-Backend

![Sportikus Logo](public/logo_cf.jpg)

Sportikus-Backend es el backend diseñado para gestionar datos relacionados con la actividad física y la salud. Está construido con Laravel, ofreciendo una arquitectura robusta para el manejo de APIs y datos.

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. Clona el repositorio:
   ```bash
   git clone https://github.com/ArturoV2001/sportikus-backend.git
   cd Sportikus-Backend
   ```

2. Instala las dependencias con Composer:
   ```bash
   composer install
   ```

3. Crea el archivo `.env` a partir del ejemplo: (Ajustalo a tu servidor de bases de datos)
   ```bash
   cp .env.example .env
   ```

4. Genera la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```

5. Ejecuta las migraciones y siembra los datos iniciales:
   ```bash
   php artisan migrate --seed
   ```

6. Inicializa las llaves de Passport:
   ```bash
    php artisan passport:keys
   ```
## Uso

Para iniciar el servidor local de Laravel, ejecuta:

```bash
php artisan serve
```

Accede al proyecto desde tu navegador en [http://127.0.0.1:8000](http://localhost:8000).

## Contribuciones

Si deseas contribuir a este proyecto:

1. Haz un fork del repositorio.
2. Crea una nueva rama para tu funcionalidad:
   ```bash
   git checkout -b feature/nueva-funcionalidad
   ```
3. Realiza tus cambios y súbelos.
4. Envía un pull request.

## Licencia

Sportikus-Backend está licenciado bajo la [MIT License](LICENSE).
