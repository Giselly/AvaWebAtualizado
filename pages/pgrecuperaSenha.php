<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h1>Redefinição de senha</h1>
                        <div id="inputs">
                            <input type="text" name="usuario" class="id" id="id" required="required" placeholder="Nome Completo" >
                            <br />
                            <input type="email" name="email" class="log" id="pass" required="required" placeholder="Email">
                            <br />
                            <?php echo $erro . $info; ?>
                            <input value="Enviar email" type="submit" id="button" name="enviar"><br/>
                            <p id="esqueceuSenha"> <a href="login">&NestedLessLess;Voltar</a></p>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>