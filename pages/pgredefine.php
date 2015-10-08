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
                <div id="login">
                    <div id="imagens">
                        <img id="computador" src="imagens/computador1.jpg">
                        <a id="bola" href="">
                            <img id="bola1" src="imagens/bolaSelecionada.png">
                        </a>
                        <a id="bolaSelecionada" href="">
                            <img id="bola2" src="imagens/bola.png">
                        </a>
                    </div>
                    <form id="areaLogin" method="post">
                        <h1>Digite sua nova senha.</h1>
                        <div id="inputs">
                            <input type="password" name="senha" class="id" id="id" required="required" placeholder="Nova Senha" >
                            <br />
                            <input type="password" name="confsenha" class="log" id="pass" required="required" placeholder="Confime sua senha">
                            <br />
                            <?php echo $erro . $info; ?>
                            <input value="Redefinir" type="submit" id="button" name="enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>