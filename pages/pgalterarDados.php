    <form class="cadastro" id="completo" name="formUsuario" method="POST">
        <div class="inputs">
            <p id="tituloPrincipal">Alterar Dados</p>

            <p class="subtitulo">Dados Gerais</p>

            <div id="dadosGerais">


                <?php
                echo (isset($dadosUsuario[0]['id'])) ?  "<input type='hidden' name='id' value='{$dadosUsuario[0]['id']}'>" : "" ;
                ?>

                <input type="hidden" name="senha" value="*23AE809DDACAF96AF0FD78ED04B6A265E05AA257" />

                <div class="media">
                    <label for="apelido">Apelido</label><br/>
                    <input type="text" name="apelido" required value="<?php echo (isset($dadosUsuario[0]['apelido'])) ? $dadosUsuario[0]['apelido'] : ""; ?>"  pattern="[a-zA-Z\s]+$" />
                </div>

                <div class="media">
                    <label for="login">Login</label><br/>
                    <input type="text" name="login" required value="<?php echo (isset($dadosUsuario[0]['login'])) ? $dadosUsuario[0]['login'] : ""; ?>" />
                </div>

                <div  class="media">
                    <label for="nome">Nome completo</label><br/>
                    <input type="text" name="nome" required value="<?php echo (isset($dadosUsuario[0]['nome'])) ? $dadosUsuario[0]['nome'] : ""; ?>" pattern="[a-zA-Z\s]+$"  />
                </div>

                <div>
                    <label for="cpf">CPF</label><br/>
                    <input type="text" name="cpf" required class="cpf" value="<?php echo (isset($dadosUsuario[0]['cpf'])) ? $dadosUsuario[0]['cpf'] : ""; ?>" />
                </div>

                <div>
                    <label for="rg">RG</label><br/>
                    <input type="text" name="rg" required maxlength="12" value="<?php echo (isset($dadosUsuario[0]['rg'])) ? $dadosUsuario[0]['rg'] : ""; ?>" />
                </div>

                <div>
                    <label for="nomeMae">Nome da mãe</label><br/>
                    <input type="text" name="nomeMae" value="<?php echo (isset($dadosUsuario[0]['nomeMae'])) ? $dadosUsuario[0]['nomeMae'] : ""; ?>" pattern="[a-zA-Z\s]+$"  />
                </div>

                <div>
                    <label for="nomePai">Nome do pai</label><br/>
                    <input type="text" name="nomePai" value="<?php echo (isset($dadosUsuario[0]['nomePai'])) ? $dadosUsuario[0]['nomePai'] : ""; ?>" pattern="[a-zA-Z\s]+$" />
                </div>

                <div>
                    <label for="dataEntrada">Data de nascimento</label><br/>
                    <input type="text" id="datepicker" class="date" name="dataNascimento" required value="<?php echo (isset($dadosUsuario[0]['dataNascimento'])) ? $dadosUsuario[0]['dataNascimento'] : ""; ?>" />
                </div>
            </div>

            <br/>
            <p class="subtitulo">Endereço e Contatos</p>

            <div id="Endereco">
                <div>
                    <label for="cep">CEP</label><br/>
                    <input type="text" name="cep" class="cep" required value="<?php echo (isset($dadosUsuario[0]['cep'])) ? $dadosUsuario[0]['cep'] : ""; ?>" />
                </div>

                <div>
                    <label for="endereco">Endereço</label><br/>
                    <input type="text" name="endereco" required value="<?php echo (isset($dadosUsuario[0]['endereco'])) ? $dadosUsuario[0]['endereco'] : ""; ?>" pattern="[a-zA-Z\s]+$" />
                </div>

                <div>
                    <label for="bairro">Bairro</label><br/>
                    <input type="text" name="bairro" required value="<?php echo (isset($dadosUsuario[0]['bairro'])) ? $dadosUsuario[0]['bairro'] : ""; ?>" pattern="[a-zA-Z\s]+$" />
                </div>

                <div>
                    <label for="email">E-mail</label><br/>
                    <input type="email" name="email" required value="<?php echo (isset($dadosUsuario[0]['email'])) ? $dadosUsuario[0]['email'] : ""; ?>" />
                </div>

                <div>
                    <label for="telefone">Telefone</label><br/>
                    <input type="text" class="fone" name="telefone" required value="<?php echo (isset($dadosUsuario[0]['telefone'])) ? $dadosUsuario[0]['telefone'] : ""; ?>" />
                </div>
            </div>

            <div id="salvar">
                <input name="enviar" class="alterar" type="submit" value="Alterar"
            </div>

            <div>
                <p id="info"></p>
            </div>

        </div>
    </form>