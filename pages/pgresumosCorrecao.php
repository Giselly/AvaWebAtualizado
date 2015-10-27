<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>
<link rel='stylesheet' type='text/css' href='css/lightBox.css'>

<section class="listagemCadastro">
    <div class="camposSection">
        <?php //echo $erroExcluir; ?>
        <table class="listagem">
            <form method="post" name="frmPesquisa" id="frmPesquisa">
            <input type="text" placeholder="Pesquisa" class="pesquisa" id="filtro" name="filtro" value="<?php echo (isset($form['filtro']) ? $form['filtro'] : ""); ?>"/>
            </form>
            <tr>
                <th><span>Nome Completo</span><span id="nome">Nome</span></th>
                <th><span>Data</span><img src="imagens/data-b.png" title="Data" /></th>
                <th><span>Capítulo</span><img src="imagens/cap-b.png" title="Capítulo" /></th>
                <th><span>Notificação</span><img src="imagens/notificacao-b.png" title="Notificação" /></th>
                <th><span>Ler</span><img src="imagens/ler-b.png" title="Ler" /></th>
                <th><span>Aprovação</span></th>
                <th><span>Excluir</span><img src="imagens/lixeira-b.png" title="Excluir" /></th>
            </tr>
            <?php
            if(isset($dadosResumo)){
                if (count($dadosResumo)) {
                    foreach ($dadosResumo as $resumo) {
                       if($resumo["excluidoResumo"] == 0) {
                            echo "
                            <tr>
                                <td class='align-left'>{$resumo['nome']}</td>
                                <td class='align-left'>{$resumo['dataAtual']}</td>
                                <td class='align-left'>Capitulo {$resumo['capitulo']}</a></td>";
                                $style = '';
                                $notificacaoTxt = '';
                                    if(isset($resumo['notificacao'])){
                                        $notificacaoTxt = $resumo['notificacao'];
                                    }
                                if($notificacaoTxt != ''){
                                    if(strlen($notificacaoTxt) > 28) {
                                        $notificacaoTxt = substr($notificacaoTxt,0, 28). "...";
                                    }
                                    
                                    if($resumo['resumoVisualizado'] == 1){
                                        $style = "color: #000305;";
                                    } 
                                    echo "<td id='ler' class='align-left'><a id='ler' href='{$url->getURL(0)}/lerNotificacao/{$resumo['id']}'>{$notificacaoTxt}</a></td>";  
                                } else {
                                    echo "<td class='align-left'>Nenhuma notificação enviada!</td>"; 
                                }

                            echo "
                                <td id='ler'><a  style='{$style}' href='{$url->getURL(0)}/lerResumos/{$resumo['id']}'>Ler</a></td>";
                                if($resumo['aprovacao'] == '1'){
                                    echo "<td>Aprovado</td>";
                                } else if ($resumo['aprovacao'] == '2'){
                                    echo "<td>Reprovado</td>";
                                } else {
                                    echo "<td>Não avaliado!</td>";
                                }
                            echo "<td id='excluir'><a href='frmExcluir' name='frmExcluir' rel='leanModal' id='btnExcluir'>Excluir</a></td>
                            </tr>
                        ";
                        }
                    }
                } else {
                    echo "<tr><td colspan='7'>Nenhum resumo encontrado.</td></tr>";
                }
            }
            ?>
        </table>
    </div>
</section>

<div id="frmExcluir" class="caixaComentarios">
    <form action="" class="frmComentarios">
        <div id="cabecalho-excluir">
            <p>Excluir Resumo</p>
            <a class="modal_close"></a>
        </div>
        <div class="txt-excluir">
            <p>Você deseja realmente excluir este resumo?</p>
            <?php echo " <input type='button' value='Excluir' href='{$url->getURL(0)}/Excluir/{$resumo['id']}'id='confirmarExcluir'/>";?>
            <input type="hidden" id="idUsuarioExcluido" />
            <input type="button" class="modal_close" value="Cancelar" id="cancelar" />
        </div>
    </form>
</div>

<!-- Scrpit para altenar de icone -->
<script type="text/javascript">
       $(document).ready(function(){
          
          $('tr#dados').mouseover(function(){
            $('img#imgL').attr('src','imagens/ler-b.png');
            $('img#imgE').attr('src','imagens/lixeira-b.png');
          }); 
          
          $('tr#dados').mouseout(function(){
            $('img#imgL').attr('src','imagens/ler.png');
            $('img#imgE').attr('src','imagens/lixeira.gif');
          }); 
       });
    </script>
