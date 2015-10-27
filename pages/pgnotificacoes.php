<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>

<section class="listagemCadastro">
    <div class="camposSection">
        <?php //echo $erroExcluir; ?>
        <table class="listagem">
            <form method="post" name="frmPesquisa" id="frmPesquisa">
            <input type="text" placeholder="Pesquisa" class="pesquisa" id="filtro" name="filtro" value="<?php echo (isset($form['filtro']) ? $form['filtro'] : ""); ?>"/>
            </form>
            <tr>
                <th>Data</th>
                <th>Assunto</th>
                <th>Notificação</th>
                <th>Excluir</th>
            </tr>
            <?php
            if(isset($dadosResumo)){
                if (count($dadosResumo)) {
                    foreach ($dadosResumo as $resumo) {
                       if(($resumo["notificacao"] !=  '' || $resumo["notificacao"] !=  NULL) && $resumo["excluidoNotificacao"] == 0 && $resumo["idUsuario"] == $idUsuario){
                            echo "
                            <tr>
                                <td class='align-left'>{$resumo['dataNotificacao']}</td>";
                                if(isset($resumo['notificacao'])){
                                    if(strlen($resumo['notificacao']) > 28) {
                                        $notificacao = substr($resumo['notificacao'],0, 28). "...";
                                    } else {
                                        $notificacao = $resumo['notificacao'];
                                    }
                                   if($resumo['notificacaoVisualizada'] == 1){
                                        $style = "color: #000305;";
                                    } else {
                                        $style = '';
                                    }
                                    
                                   echo "<td class='align-left'><a style='{$style}' href='{$url->getURL(0)}/lerNotificacao/{$resumo["id"]}'>{$notificacao}</a></td>";  
                                } else {
                                   echo "<td class='align-left'>Nenhuma notificação enviada!</td>"; 
                                }
                            echo "
                                <td id='excluir'><a class='excluirFuncionario' href='{$url->getURL(0)}/Excluir/{$resumo['id']}'>Excluir</a></td>
                            </tr>
                        ";
                        }                   
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma notificação encontrada.</td></tr>";
                }
            }
            ?>


        </table>
    </div>
    <a href='#frmExcluir' name='frmExcluir' rel='leanModal' id='btnExcluir'></a>
</section>

<div id="frmExcluir" class="caixaComentarios">
    <form action="" class="frmComentarios">
        <div id="cabecalho-excluir">
            <p>Excluir notificação</p>
            <a class="modal_close"></a>
        </div>
        <div class="txt-excluir">
            <p>Você deseja realmente excluir esta notificação?</p>
            <input type="button" value="Excluir" id="confirmarExcluir" />
            <input type="hidden" id="idUsuarioExcluido" />
            <input type="button" class="modal_close" value="Cancelar" id="cancelar" />
        </div>
    </form>
</div>
