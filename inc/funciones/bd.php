<?php

// credenciales de la base de datos
define('DB_USUARIO', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaphp');
//mysqli solo ..
//pdo 12 y 13  tipos de base de datos
$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );

//echo $conn->ping(); bunea forma si esta siendo conexino 1 si 0 no