<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<script type="text/javascript" src="js/jquery.leanModal.min_1.js"></script>
<section id="resumo">
    <h2 class="titulo"><?php echo "Notificação";?></h2>
    <<h2 class="titulo"><?php echo $notificacaoBuscarPorId[0]['assunto'];?></h2>
    <h2 class="informacoesGerais">Enviada para: <?php echo $notificacaoBuscarPorId[0]['nome'];?></h2>
    <h2 class="informacoesGerais">Data: <?php echo $notificacaoBuscarPorId[0]['dataNotificacao'];?></h2>
    <textarea class="textArea"><?php echo $notificacaoBuscarPorId[0]['notificacao'];?></textarea>
</section>
