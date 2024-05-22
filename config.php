<?php
define('DB_HOST', 'localhost');  // ou o host do seu banco de dados
define('DB_PORT', '5432');       // porta padrão do PostgreSQL
define('DB_USER', 'postgres');   // ou o usuário do seu banco de dados
define('DB_PASS', 'isaac020492.');
define('DB_NAME', 'tde03_back');

function getConnection() {
    $dsn = 'pgsql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}
?>
