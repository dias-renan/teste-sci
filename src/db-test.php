<?php
$host = 'db';
$db = 'testdb';
$user = 'user';
$pass = 'userpass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "✅ Conexão com o banco de dados bem-sucedida!";
} catch (PDOException $e) {
    echo "❌ Erro ao conectar com o banco de dados: " . $e->getMessage();
}
?>
