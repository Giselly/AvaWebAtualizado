<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>

<section class="listagemCadastro" style="margin-bottom: 100px;">
    <div class="camposSection">
        <?php echo $erroExcluir; ?>
        <table class="listagem">
            <input name="enviar" class="novo" type="submit" value="Novo Usuário" onclick="window.location = '<?php echo $url->getURL(0); ?>/novo';"/>
            <form method="post" name="frmPesquisa" id="frmPesquisa">
                <input type="text" placeholder="Pesquisa" class="pesquisa" id="filtro" name="filtro" value="<?php echo (isset($form['filtro']) ? $form['filtro'] : ""); ?>"/>
            </form>
            <tr>
                <th><span>Nome Completo</span><span id="nome">Nome</span></th>
                <th id="email"><span>E-mail</span><img src="imagens/email-icon.png" title="E-mail" /></th>
                <th><span>Status</span><img src="imagens/info.png" title="Status" /></th>
                <th id="editar"><span>Editar</span><img src="imagens/editar-b.png" title="Editar" /></th>
                <th><span>Excluir</span><img src="imagens/lixeira-b.png" title="Excluir" /></th>
            </tr>
            <?php
            if (count($dadosUsuarios)) {
                foreach ($dadosUsuarios as $usuario) {
                    echo "
                    <tr id='dados'>
                        <td class='align-left'>{$usuario['nome']}</td>
                        <td id='email' class='align-left'>{$usuario['email']}</td>
                        <td id='status'><input name='primeiroLogin' disabled='disabled' type='hidden' " . (($usuario['primeiroLogin'] == 1) ? "value='ativo'/> <a href='{$url->getURL(0)}/desativar/{$usuario['id']}'>"
                        . "<img src='imagens/ativar.png' title='Usuario ativo! Clique para desativar!'></a>" : "value='inativo'/> <a href='{$url->getURL(0)}/ativar/{$usuario['id']}'>"
                        . "<img src='imagens/desativar.png' title='Usuario inativo! Clique para ativar!'></a> ") . "</td>
                        <td id='editar'><a href='{$url->getURL(0)}/editar/{$usuario['id']}'><img id='imgE' src='imagens/editar.png' title='Editar' /></a></td>
                        <td id='excluir'><a class='exluirFuncionario' href='{$usuario['id']}'><img id='imgL' src='imagens/lixeira.gif' title='Excluir' /></a></td>
                    </tr>
                ";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum usuário encontrado.</td></tr>";
            }
            ?>
            
        </table>
    </div>
    <a href='#frmExcluir' name='frmExcluir' rel='leanModal' id='btnExcluir'></a>
</section>

<div id="frmExcluir" class="caixaComentarios">
    <form action="" class="frmComentarios">
        <div id="cabecalho-excluir">
            <p>Excluir funcionario</p>
            <a class="modal_close"></a>
        </div>
        <div class="txt-excluir">
            <p>Você deseja realmente excluir este funcionário?</p>
            <a href="<?php echo "{$url->getURL(0)}/excluir/{$usuario['id']}";?>"><input type="button"  class="excluir" value="Excluir" id="confirmarExcluir" />
                <input type="hidden" id="idUsuarioExcluido" /></a>
            <input type="button" class="modal_close cancelar" value="Cancelar" id="cancelar" />
        </div>
    </form>
</div>
