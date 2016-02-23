<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css/formCadastroDeUsuarios.css">

<section>
    <form class="cadastro" id="completo" name="formUsuario" method="POST" enctype="multipart/form-data">
            <div class="inputs">
                <?php
                if($url->getURL(0) == 'cadastroDeUsuarios') {
                    echo '<p id="tituloPrincipal">Cadastro de Usuários</p>';
                } else {
                   echo '<p id="tituloPrincipal">Alterar Dados</p>'; 
                }?>
                
                <p class="subtitulo">Dados Gerais</p>
                
                <div id="dadosGerais">

                    <input type="hidden" name="tipo" value="<?php echo $url->getURL(1);?>" />

                    <?php
                        echo (isset($dadosUsuario[0]['id']) && $url->getURL(1) == 'editar') ?  "<input type='hidden' name='id' value='{$dadosUsuario[0]['id']}'>" : "" ;
                    ?>

                    <input type="hidden" name="senha" value="*23AE809DDACAF96AF0FD78ED04B6A265E05AA257" />

                    <div class="media">
                        <label for="apelido">Apelido</label><br/>
                        <input type="text" name="apelido" value="<?php echo (isset($dadosUsuario[0]['apelido']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['apelido'] : ""; ?>"  pattern="[a-zA-Z\s]+$" />
                    </div>

                    <div class="media">
                        <label for="login">Login</label><br/>
                        <input type="text" name="login" value="<?php echo (isset($dadosUsuario[0]['login']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['login'] : ""; ?>" />
                    </div>

                    <div  class="media">
                        <label for="nome">Nome completo</label><br/>
                        <input type="text" name="nome" value="<?php echo (isset($dadosUsuario[0]['nome']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['nome'] : ""; ?>" pattern="[a-zA-Z\s]+$"  />
                    </div>

                    <div>
                        <label for="cpf">CPF</label><br/>
                        <input type="text" name="cpf" class="cpf" value="<?php echo (isset($dadosUsuario[0]['cpf']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['cpf'] : ""; ?>" />
                   </div>

                    <div>
                        <label for="rg">RG</label><br/>
                        <input type="text" name="rg" maxlength="12" value="<?php echo (isset($dadosUsuario[0]['rg']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['rg'] : ""; ?>" />
                    </div>

                    <div>
                        <label for="nomeMae">Nome da mãe</label><br/>
                        <input type="text" name="nomeMae" value="<?php echo (isset($dadosUsuario[0]['nomeMae']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['nomeMae'] : ""; ?>" pattern="[a-zA-Z\s]+$"  />
                    </div>

                    <div>
                        <label for="nomePai">Nome do pai</label><br/>
                        <input type="text" name="nomePai" value="<?php echo (isset($dadosUsuario[0]['nomePai']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['nomePai'] : ""; ?>" pattern="[a-zA-Z\s]+$" />
                    </div>

                    <div>
                        <label for="dataEntrada">Data de nascimento</label><br/>
                        <input type="text" id="datepicker" class="date" name="dataNascimento" value="<?php echo (isset($dadosUsuario[0]['dataNascimento']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['dataNascimento'] : ""; ?>" />
                    </div>

                    <div id="sexo">
                        <label for="sexo">Sexo</label><br/>
                        <input type="radio" value="1" <?php echo ($url->getURL(1) == 'editar' &&(!isset($dadosUsuario[0]['sexo']) || $dadosUsuario[0]['sexo'] == '1') ? 'checked="checked"' : '' ); ?> name="sexo" />
                        Masculino
                        <!--<br/>-->
                        <input type="radio" value="0"  <?php echo ($url->getURL(1) == 'editar' && (isset($dadosUsuario[0]['sexo']) && $dadosUsuario[0]['sexo'] == '0') ? 'checked="checked"' : '' ); ?> name="sexo" />
                        Feminino
                    </div>
                </div>
                
                <br/>
                <p class="subtitulo">Endereço e Contatos</p>
                
                <div id="Endereco">
                    <div>
                        <label for="cep">CEP</label><br/>
                        <input type="text" name="cep" class="cep" value="<?php echo (isset($dadosUsuario[0]['cep']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['cep'] : ""; ?>" />
                    </div>

                    <div>
                        <label for="endereco">Endereço</label><br/>
                        <input type="text" name="endereco" value="<?php echo (isset($dadosUsuario[0]['endereco']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['endereco'] : ""; ?>" pattern="[a-zA-Z\s]+$" />
                    </div>

                    <div>
                        <label for="bairro">Bairro</label><br/>
                        <input type="text" name="bairro" value="<?php echo (isset($dadosUsuario[0]['bairro']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['bairro'] : ""; ?>" pattern="[a-zA-Z\s]+$" />
                    </div>

                    <div>
                        <label for="email">E-mail</label><br/>
                        <input type="email" name="email" value="<?php echo (isset($dadosUsuario[0]['email']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['email'] : ""; ?>" />
                    </div>

                    <div>
                        <label for="telefone">Telefone</label><br/>
                        <input type="text" class="fone" name="telefone" value="<?php echo (isset($dadosUsuario[0]['telefone']) && $url->getURL(1) == 'editar') ? $dadosUsuario[0]['telefone'] : ""; ?>" />
                    </div>
                </div>
                
                <div id="salvar">
                    <input type="submit" class="alterar" name="cadastrar" value="Salvar">                   
                    
                    <a href="<?php echo ($url->getURL(0) == "alterarDados") ? RAIZ."treinamento/01/topico/1.1_-_A_folha_de_papel_em_branco" : RAIZ . $url->getURL(0); ?>">Voltar</a>
                </div>
                
                <div>
                    <p id="info"></p>
                </div>

            </div>
    </form>
</section>