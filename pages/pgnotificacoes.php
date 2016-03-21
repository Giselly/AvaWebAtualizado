<link rel='stylesheet' type='text/css' href='css/cadastroDeUsuarios.css'>
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
                <th>Data</th>
                <th>Assunto</th>
                <th>Notificação</th>
                <th><span>Excluir</span><img src="imagens/lixeira-b.png" title="Excluir" /></th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(isset($dadosResumo)){
                if (count($dadosResumo)) {
                    foreach ($dadosResumo as $resumo) {
                       if(($resumo["notificacao"] !=  '' || $resumo["notificacao"] !=  NULL) && $resumo["excluidoNotificacao"] == 0 && $resumo["idUsuario"] == $idUsuario){
                            echo "
                            <tr>
                                <td class='align-left'>{$resumo['dataNotificacao']}</td>";
                                echo isset($resumo['assunto']) ? "<td class='align-left'>{$resumo['assunto']}</td>" : "<td class='align-left'></td>";
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
                                    
                                   echo "<td class='align-left'><a id='not' style='{$style}' href='{$url->getURL(0)}/lerNotificacao/{$resumo['id']}'>{$notificacao}</a></td>";  
                                } else {
                                   echo "<td class='align-left'>Nenhuma notificação enviada!</td>"; 
                                }
                            echo "
                                <td id='excluir'><a class='excluirFuncionario' href='{$url->getURL(0)}/Excluir/{$resumo['id']}'><img id='imgL' src='imagens/lixeira.gif' title='Excluir' /></a></td>
                            </tr>
                        ";
                        }                   
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma notificação encontrada.</td></tr>";
                }
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
<script>
	$(document).ready(function(){
		
	   var tam = $(window).width();
	 
	   if (tam <=699 ){
		  $("#not").removeClass('#not');
		  $("#not").text("Ler");
	   }
	});
</script>
