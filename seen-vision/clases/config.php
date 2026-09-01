<?php
// Configuración de BD
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'amcosta_amcosta');
define('DB_PASS', getenv('DB_PASS') ?: 'AgNO301NJC');
define('DB_NAME', getenv('DB_NAME') ?: 'amcosta_seenvision');
define('DB_CHARSET', getenv('DB_CHARSET') ?: 'utf8mb4');

// Base URL del proyecto (carpeta en htdocs)
define('APP_BASE_URL', getenv('APP_BASE_URL') ?: '/seen-vision');
