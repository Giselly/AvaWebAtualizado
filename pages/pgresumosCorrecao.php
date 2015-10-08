<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>

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
                <th><span>Excluir</span><img src="imagens/lixeira-b.png" title="Excluir" /></th>
            </tr>
            <?php
            if(isset($dadosResumo)){
                if (count($dadosResumo)) {
                    foreach ($dadosResumo as $resumo) {
                        echo "
                        <tr id='dados'>
                            <td class='align-left'>{$resumo['nome']}</td>
                            <td>{$resumo['dataAtual']}</td>
                            <td>Capitulo {$resumo['capitulo']}</a></td>";
                            $notificacaoTxt = '';
                                if(isset($resumo['notificacao'])){
                                    $notificacaoTxt = $resumo['notificacao'];
                                }
                            if($notificacaoTxt != ''){
                                if(strlen($notificacaoTxt) > 28) {
                                    $notificacaoTxt = substr($notificacaoTxt,0, 28). "...";
                                }                             
                                echo "<td class='align-left'><a href='{$url->getURL(0)}/lerNotificacao/{$resumo['id']}'>{$notificacaoTxt}</a></td>";  
                            } else {
                                echo "<td>Nenhuma notificação enviada!</td>"; 
                            }
                            
                        echo "
                            <td id='ler'><a href='{$url->getURL(0)}/lerResumos/{$resumo['id']}'><img id='imgL' src='imagens/ler.png' title='Ler'/></a></td>
                            <td id='excluir'><a class='exluirFuncionario' href='{$resumo['id']}'><img id='imgE' src='imagens/lixeira.gif' title='Excluir'/></a></td>
                        </tr>
                    ";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum resumo encontrado.</td></tr>";
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
            <p>Excluir funcionario</p>
            <a class="modal_close"></a>
        </div>
        <div class="txt-excluir">
            <p>Você deseja realmente excluir este resumo?</p>
            <input type="button" value="Excluir" id="confirmarExcluir" />
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
