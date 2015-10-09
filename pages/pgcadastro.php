<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ambiente Virtual de Aprendizagem</title>
        <base href="<?php echo RAIZ; ?>">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/login.js"></script>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="shortcut icon" href="imagens/icon.ico" type="image/gif">
    </head>
    <body>
        <input type="hidden" value="<?php echo RAIZ; ?>" id="raiz" />

        <div id="fundoAzul">
            <div id="login">
                    <div id="imagens">
                        <img id="computador" src="imagens/computador1.png">
                        <a id="bola" href="">
                            <img id="bola1" src="imagens/bolaSelecionada.png">
                        </a>
                        <a id="bolaSelecionada" href="">
                            <img id="bola2" src="imagens/bola.png">
                        </a>
                    </div>
                    <form id="areaLogin" method="post">
                        <h1>Solicite um cadastro</h1>
                        <div id="inputs">
                            <input type="text" name="usuario" class="id" id="id" required="required" placeholder="Nome Completo" >
                            <br />
                            <input type="email" name="email" class="log" id="pass" required="required" placeholder="Email">
                            <br />
                            <input type="text" name="apelido" class="log" id="pass" required="required" placeholder="Nome de visualização no sistema">
                            <br />
                            <input type="text" name="login" class="log" id="pass" required="required" placeholder="Login" style="width: 172.5px;">                       
                            <input type="password" name="senha" class="log" id="pass" required="required" placeholder="Senha" style="width: 172.5px;">
                            <br />
                            <input value="Enviar" type="submit" id="button" name="enviar"> ou  <a href="login">Voltar a tela de login</a></p>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>