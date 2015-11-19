<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<script type="text/javascript" src="js/jquery.leanModal.min_1.js"></script>
<section id="resumo">
    <h2 class="titulo"><?php echo "- Notificação -";?></h2>
    <h2 class="titulo"><?php echo $resumoBuscarPorId[0]['assunto'];?></h2> <br/>
    <div class="notificacao">
        <h2 class="informacoesGerais">Enviada para: <span><?php echo $resumoBuscarPorId[0]['nome'];?></span></h2>
        <h2 class="informacoesGerais">Data: <span><?php echo $resumoBuscarPorId[0]['dataNotificacao'];?></span></h2>
        <div style="height: 2px; background-color:#004c98;"></div> <br>
        <div id="noti">
            <?php echo $resumoBuscarPorId[0]['notificacao'];?>  
        </div>
    </div>
</section>
