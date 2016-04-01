<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>
<link rel="stylesheet" type="text/css" href="DataTable/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="DataTable/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script type="text/javascript" src="DataTable/datatables.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<section class="listagemCadastro" style="margin-bottom: 100px;">
    <div class="camposSection">
        <?php echo $erroExcluir; ?>
        <table id="example" class="listagem table table-striped table-bordered" cellspacing="0" width="100%">
            <input name="enviar" class="novo" type="submit" value="Novo Usuário" onclick="window.location = '<?php echo $url->getURL(0); ?>/novo';"/>
            <thead>
            <tr>
                <th><span>Nome Completo</span><span id="nome">Nome</span></th>
                <th id="email"><span>E-mail</span><img src="imagens/email-icon.png" title="E-mail" /></th>
                <th><span>Status</span><img src="imagens/info.png" title="Status" /></th>
                <th id="editar"><span>Editar</span><img src="imagens/editar-b.png" title="Editar" /></th>
                <th><span>Excluir</span><img src="imagens/lixeira-b.png" title="Excluir" /></th>
            </tr>
            </thead>
            <tbody>
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
                        <td id='excluir'><a class='exluirFuncionario' href='{$usuario['id']}'><img id='imgL' src='imagens/lixeira.gif' title='Excluir'/></a></td>
                    </tr>
                ";
               }
            } else {
                echo "<tr><td colspan='6'>Nenhum usuário encontrado.</td></tr>";
            }
            ?>
            </tbody>
        </table>
        
    </div>
    <a href='#frmExcluir' name='frmExcluir' rel='leanModal' id='btnExcluir'></a>
</section>

<div id="frmExcluir" class="caixaComentarios">
    <form action="" class="frmComentarios">
        <div id="cabecalho-excluir">
            <p>Excluir usuário</p>
            <a class="modal_close"></a>
        </div>
        <div class="txt-excluir">
            <p>Você deseja realmente excluir este usuário?</p>
            <a id="hrefExcluir"><input type="button"  class="excluir" value="Excluir" id="confirmarExcluir" />
                <input type="hidden" id="idUsuarioExcluido" /></a>
            <input type="button" class="modal_close cancelar" value="Cancelar" id="cancelar" />
        </div>
    </form>
</div>
