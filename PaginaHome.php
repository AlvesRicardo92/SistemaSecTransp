<?php
    include 'db_connect.php';
    include 'functions.php';
    sec_session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <?php
        if(login_check($mysqli) == true) {
    ?>
    <main>
        <nav>
            <a href="solicitacaointerna.html" class="menu"><img src="imagens/Imagens sem fundo/si.png" alt=""><br> Solicitação</a>
            <a href="projeto.html" class="menu"><img src="imagens/Imagens sem fundo/projeto.png" alt=""><br>Projetos</a>
            <a href="oficios.html" class="menu"><img src="imagens/Imagens sem fundo/oficios.png" alt=""><br>Ofícios</a>
            <a href="certidoes.html" class="menu"><img src="imagens/Imagens sem fundo/certidoes.png" alt=""><br>Certidões</a>
            <a href="os.html" class="menu"><img src="imagens/Imagens sem fundo/OS.png" alt=""><br>OS</a>
            <a href="relatorios.html" class="menu"><img src="imagens/Imagens sem fundo/relatorios.png" alt=""><br>Relatórios</a>
            <a href="redar.html" class="menu"><img src="imagens/Imagens sem fundo/radar.png" alt=""><br>Radar</a>
            <a href="carros.html" class="menu"><img src="imagens/Imagens sem fundo/carros.png" alt=""><br> Carros</a>
            <a href="index.php" class="menu"><img src="imagens/Imagens sem fundo/sair.png" alt=""><br>Sair</a>
            <a href="#AbrirModal" class="menu"><img src="imagens/hide.bmp" alt=""><br>Abrir modal</a>
        </nav>    
    </main>
    <div id="abrirModal" class="modal">
        <a href="#fechar" title="Fechar" class="fechar">x</a>
        <h2>Janela Modal</h2>
        <p>Esta é uma simples janela de modal.</p>
        <p>Você pode fazer qualquer coisa aqui, página de Login, pop-ups, ou formulários</p>
    </div>
    <?php
        } else {
            echo 'Você não está autorizado a acessar esta página. Por favor, efetue <a href="index.php">login</a>.<br>';
        }
    ?>
</body>
</html>