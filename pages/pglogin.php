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
                    <form id="areaLogin" name="login">
                        <h1>Portal Aluno</h1>
                        <div id="inputs">
                            <input type="text" name="usuario" class="id" id="id"  required="required" maxlength="24" placeholder="CPF" >
                            <br />
                            <input type="password" name="senha" class="log" id="pass" required="required"  maxlength="20" placeholder="Senha">
                            <br />
                            <p id="info"></p>
                        </div>
                        <p id="checkbox"><input type="checkbox" id="box"> Mantenha-me Conectado</p>
                         <p id="cadastro"> <input  value="Entrar" type="submit" id="button" name="button"> ou <a href="cadastro">Cadastre-se</a></p>
                        <p id="esqueceuSenha">Esqueceu sua senha? <a href="recuperaSenha">Clique aqui</a></p>
                    </form>
                    <div class="aguarde" id="aguardarConfirmacao">
                        <p> Aguarde a confirmação do seu cadastro para logar-se. Um email será enviado!</p></br>
                        <a href="login">Voltar a tela de login</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>