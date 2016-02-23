
<link rel="stylesheet" type="text/css" href="../css/alterarSenha.css">
<form class="cadastro" id="simples">
    <div class="camposFormularioSimples">
        <div class="inputs">
            <p id="tituloPrincipal">Alterar senha de acesso</p>
            <div id="campos">
                <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>" />
                
                <div>
                    <label for="senhaAtual">Senha atual:</label><br/>
                    <input type="password" name="senhaAtual" required="required"/>
                </div><br>

                <div>
                    <label for="novaSenha">Nova senha:</label><br/>
                    <input type="password" name="novaSenha" required="required"/>
                </div><br>

                <div>
                    <label for="confirmarSenha">Confirmar senha:</label><br/>
                    <input type="password" name="confirmarSenha" required="required"/>
                </div><br>

                <div id="botao">
                    <input name="enviar" class="alterar" type="submit" value="Alterar"/>
                </div>
            </div>
            <p id="info"></p>
        </div>
    </div>
</form>