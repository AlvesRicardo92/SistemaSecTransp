<?php
include 'db_connect.php';
include 'functions.php';
sec_session_start(); // Nossa segurança personalizada para iniciar uma sessão php. 

if(isset($_POST['usuario'], $_POST['p'])) { 
   $usuario = $_POST['usuario'];
   $password = $_POST['p']; // A senha em hash.
   if(login($usuario, $password, $mysqli) == true) {
      // Login com sucesso
      //echo 'Sucesso: Você efetuou login.';
      header('Location: PaginaHome.php');
   } else {
      // Falha de login
      echo "ERRO";
      //header('Localização: ./login.php?error=1');
   }
} else { 
   // As variáveis POST corretas não foram enviadas para esta página.
   echo 'Requisição Inválida';
}
?>