<?php
define("HOST", "10.1.0.230"); // O host no qual você deseja se conectar.
define("USER", "r37484"); // O nome de usuário do banco de dados.
define("PASSWORD", "r37484"); // A senha do usuário do banco de dados. 
define("DATABASE", "inventario_informatica_se"); // O nome do banco de dados.

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// Se você estiver se conectando via TCP/IP ao invés de um socket UNIX, lembre-se de adicionar o número da porta como um parâmetro.
?>