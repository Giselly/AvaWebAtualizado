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
                        <a id="bola" class="slider" href="1">
                            <img id="bola1" src="imagens/bolaSelecionada.png">
                        </a>
                        <a id="bolaSelecionada" class="slider" href="2">
                            <img id="bola2" src="imagens/bola.png">
                        </a>
                    </div>
                        <div id="aguardarConfirmacao">
                        <p> Aguarde a confirmação do seu cadastro para logar-se. Um email será enviado!</p></br>
                        <a href="login">Voltar a tela de login</a>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>