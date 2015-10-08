<link rel="stylesheet" type="text/css" href="css/alterarDados.css">
<link rel="stylesheet" type="text/css" href="css/alterarSenha.css">
<form class="cadastro" id="simples">
    <div class="camposFormularioSimples">
        <div class="inputs">
            <p id="tituloPrincipal">Alterar senha de acesso</p>

            <div>
                <label for="senhaAtual">Senha atual:</label><br/>
                <input type="password" name="senhaAtual" required="required" />
            </div>

            <div>
                <label for="novaSenha">Nova senha:</label><br/>
                <input type="password" name="novaSenha" required="required" />
            </div>

            <div>
                <label for="confirmarSenha">Confirmar senha:</label><br/>
                <input type="password" name="confirmarSenha" required="required" />
            </div>

            <div id="botao">
                <input name="enviar" class="alterar" type="submit" value="Alterar" />
            </div>

            <p id="info"></p>
        </div>
    </div>
</form>