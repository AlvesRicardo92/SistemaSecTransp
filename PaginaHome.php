<?php
    include 'db_connect.php';
    include 'functions.php';
    sec_session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
            z-index: 99999;
            opacity:0;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity:1;
            pointer-events: auto;
        }

        .modalDialog > div {
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: -moz-linear-gradient(#fff, #999);
            background: -webkit-linear-gradient(#fff, #999);
            background: -o-linear-gradient(#fff, #999);
        }

        .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }

        .close:hover { background: #00d9ff; }
    </style>
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
            <a href="radar.html" class="menu"><img src="imagens/Imagens sem fundo/radar.png" alt=""><br>Radar</a>
            <a href="carros.html" class="menu"><img src="imagens/Imagens sem fundo/carros.png" alt=""><br> Carros</a>
            <a href="index.php" class="menu"><img src="imagens/Imagens sem fundo/sair.png" alt=""><br>Sair</a>
            <a href="#openModal"class="menu"><img src="imagens/hide.bmp" alt=""><br>Abrir modal</a>
            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <h2>Modal Box</h2>
                    <p>This is a sample modal box that can be created using the powers of CSS3.</p>
                    <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
                </div>
            </div>
        </nav>    
    </main>
    <?php
        } else {
            echo 'Você não está autorizado a acessar esta página. Por favor, efetue <a href="index.php">login</a>.<br>';
        }
    ?>
</body>
</html>