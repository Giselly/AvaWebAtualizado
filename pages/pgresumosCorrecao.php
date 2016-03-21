<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>
<link rel='stylesheet' type='text/css' href='css/lightBox.css'>
<link rel="stylesheet" type="text/css" href="DataTable/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="DataTable/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script type="text/javascript" src="DataTable/datatables.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<section class="listagemCadastro">
    <div class="camposSection">
        <?php //echo $erroExcluir; ?>
        <table id="example" class="listagem table table-striped table-bordered" cellspacing="0" width="100%"> 
            <thead>
            <tr>
                <th><span>Nome Completo</span><span id="nome">Nome</span></th>
                <th id="data"><span>Data</span><img src="imagens/data-b.png" title="Data" /></th>
                <th id="capitulo"><span>Capítulo</span><img src="imagens/cap-b.png" title="Capítulo" /></th>
                <th id="notificação"><span>Notificação</span><img src="imagens/notificacao-b.png" title="Notificação" /></th>
                <th><span>Ler</span><img src="imagens/ler-b.png" title="Ler" /></th>
                <th id="aprovacao"><span>Aprovação</span><img src="imagens/aprovacao.png" title="Aprovação" /></th>
                <th id="excluir"><span>Excluir</span><img src="imagens/lixeira-b.png" title="Excluir" /></th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(isset($dadosResumo)){
                if (count($dadosResumo)) {
                    foreach ($dadosResumo as $resumo) {
                       if($resumo["excluidoResumo"] == 0) {
                            echo "
                            <tr>
                                <td class='align-left'>{$resumo['nome']}</td>
                                <td id='data' class='align-left'>{$resumo['dataAtual']}</td>
                                <td id='capitulo' class='align-left'>Capitulo {$resumo['capitulo']}</a></td>";
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
                                    echo "<td id='notificação' class='align-left'><a id='ler' href='{$url->getURL(0)}/lerNotificacao/{$resumo['id']}'>{$notificacaoTxt}</a></td>";  
                                } else {
                                    echo "<td id='notificação' class='align-left'>Nenhuma notificação enviada!</td>"; 
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
                            echo "<td id='excluir'><a class='exluirFuncionario' href='frmExcluir' name='frmExcluir' rel='leanModal' id='btnExcluir'>Excluir</a></td>
                            </tr>
                        ";
                        }
                    }
                } else {
                    echo "<tr><td colspan='7'>Nenhum resumo encontrado.</td></tr>";
                }
            }
            ?>
            </tbody>
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
            <a id="hrefExcluir"><?php echo " <input type='button' value='Excluir' href='{$url->getURL(0)}/Excluir/{$resumo['id']}'id='confirmarExcluir'/>";?></a>
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
