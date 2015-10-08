<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form class="cadastro" id="simples" method="post">
    <div class="camposFormularioSimples">
        <div class="inputs">
            <p id="tituloPrincipal">Alterar Login de acesso</p>
            <?php
            echo (isset($dadosUsuario[0]['id'])) ?  "<input type='hidden' name='id' value='{$dadosUsuario[0]['id']}'>" : "" ;
            ?>
            <div>
                <label for="nome">Nome completo:</label><br/>
                <input type="text" name="nome" value="<?php echo isset($dadosUsuario[0]['nome']) ? $dadosUsuario[0]['nome'] : ''; ?>" required="required"/>
            </div>

            <div>
                <label for="apelido">Nome curto:</label><br/>
                <input type="text" name="apelido" value="<?php echo isset($dadosUsuario[0]['apelido']) ? $dadosUsuario[0]['apelido']: ''; ?>" required="required"/>
            </div>

            <div>
                <label for="email">Email:</label><br/>
                <input type="email" name="email" value="<?php echo isset($dadosUsuario[0]['email']) ? $dadosUsuario[0]['email'] : ''; ?>" required="required"/>
            </div>

            <div>
                <label for="login">Login:</label><br/>
                <input type="text" name="login" value="<?php echo isset($dadosUsuario[0]['login']) ? $dadosUsuario[0]['login']: ''; ?>" required="required"/>
            </div>
            
            <div>
                <label for="telefone">Telefone:</label><br/>
                <input type="text" class="fone" name="telefone" value="<?php echo isset($dadosUsuario[0]['telefone']) ? $dadosUsuario[0]['telefone'] : ''; ?>" required="required"/>
            </div>

            <div id="botao">
                    <input name="enviar" class="alterar" type="submit" value="Alterar" />
                </div>
            

            <p id="info"></p>
        </div>
    </div>
</form>

