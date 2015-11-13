<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<div class="camposFormularioSimples" style="margin-bottom: 100px;">

<div class="inputs">

    <form class="cadastro" id="simples" method="post">
        <p id="tituloPrincipal">Alterar Dados</p>

        <?php
            //echo (isset($dadosUsuario[0]['id'])) ?  "<input type='hidden' name='id' value='{$dadosUsuario[0]['id']}'>" : "" ;
            ?>        
        <p class="subtitulo">Dados Gerais</p>

        <div id="dadosGerais">
                    <?php
                        echo (isset($dadosUsuario[0]['id'])) ?  "<input type='hidden' name='id' value='{$dadosUsuario[0]['id']}'>" : "" ;
                    ?>

                    <div class="media">
                        <label for="apelido">Apelido</label><br/>
                        <input type="text" name="apelido" value="<?php echo (isset($dadosUsuario[0]['apelido'])) ? $dadosUsuario[0]['apelido'] : ''; ?>" />
                    </div>

                    <div class="media">
                        <label for="login">Login</label><br/>
                        <input type="text" name="login" value="<?php echo (isset($dadosUsuario[0]['login'])) ? $dadosUsuario[0]['login'] : ''; ?>" />
                    </div>

                    <div  class="media">
                        <label for="nome">Nome completo</label><br/>
                        <input type="text" name="nome" value="<?php echo (isset($dadosUsuario[0]['nome'])) ? $dadosUsuario[0]['nome'] : ''; ?>" />
                    </div>

                    <div class="media">
                        <label for="cpf">CPF</label><br/>
                        <input type="text" name="cpf" class="cpf" value="<?php echo (isset($dadosUsuario[0]['cpf'])) ? $dadosUsuario[0]['cpf'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="rg">RG</label><br/>
                        <input type="text" name="rg" value="<?php echo (isset($dadosUsuario[0]['rg'])) ? $dadosUsuario[0]['rg'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="nomeMae">Nome da mãe</label><br/>
                        <input type="text" name="nomeMae" value="<?php echo (isset($dadosUsuario[0]['nomeMae'])) ? $dadosUsuario[0]['nomeMae'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="nomePai">Nome do pai</label><br/>
                        <input type="text" name="nomePai" value="<?php echo (isset($dadosUsuario[0]['nomePai'])) ? $dadosUsuario[0]['nomePai'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="dataNascimento">Data de nascimento:</label><br/>
                        <input type="text" id="datepicker" class="ui-datepicker-calendar date" name="dataNascimento" value="<?php echo isset($dadosUsuario[0]['dataNascimento']) ? $dadosUsuario[0]['dataNascimento'] : ''; ?>" />
                    </div>

                    <div id="sexo" class="media">
                        <label for="sexo">Sexo</label><br/>
                        <input type="radio" value="1" <?php echo ((!isset($dadosUsuario[0]['sexo']) || $dadosUsuario[0]['sexo'] == '1') ? 'checked="checked"' : '' ); ?> name="sexo" />
                        Masculino
                        <input type="radio" value="0" <?php echo ((isset($dadosUsuario[0]['sexo']) && $dadosUsuario[0]['sexo'] == '0') ? 'checked="checked"' : '' ); ?> name="sexo" />
                        Feminino
                    </div>

                </div>
                
                <br/>
                <p class="subtitulo">Endereço e Contatos</p>
                
                <div id="Endereco">
                    <div class="media">
                        <label for="cep">CEP</label><br/>
                        <input type="text" name="cep" class="cep" value="<?php echo (isset($dadosUsuario[0]['cep'])) ? $dadosUsuario[0]['cep'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="endereco">Endereço</label><br/>
                        <input type="text" name="endereco" value="<?php echo (isset($dadosUsuario[0]['endereco'])) ? $dadosUsuario[0]['endereco'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="bairro">Bairro</label><br/>
                        <input type="text" name="bairro" value="<?php echo (isset($dadosUsuario[0]['bairro'])) ? $dadosUsuario[0]['bairro'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="email">E-mail</label><br/>
                        <input type="text" name="email" value="<?php echo (isset($dadosUsuario[0]['email'])) ? $dadosUsuario[0]['email'] : ""; ?>" />
                    </div>

                    <div class="media">
                        <label for="telefone">Telefone</label><br/>
                        <input type="text" class="fone" name="telefone" value="<?php echo (isset($dadosUsuario[0]['telefone'])) ? $dadosUsuario[0]['telefone'] : ""; ?>" />
                    </div>
                </div>
                
                <div>
                    <input name="enviar" class="alterar" type="submit" value="Alterar" />
                </div>
                
                <div>
                    <p id="info"></p>
                </div>
        </form>
    </div>
</div>
