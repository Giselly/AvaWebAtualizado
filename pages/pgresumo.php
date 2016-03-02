<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<link rel='stylesheet' type='text/css' href='css/font.css'>


<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/js/tinymce/tinyMCEpt_BR.js"></script>

<section id="resumo-send">
    <form method="POST" id="resumo">
        <?php if($existeResumo == false) {
            ?>
            <div id="title">
                <h2 class="title" id="tituloCapitulo"><?php echo "Resumo";?></h2>
            </div>
            <br>
            <div id="m_ret_azul">
                <div id="ret_azul_title"></div>
                <h2 class="subTitle" id="tituloCapitulo"><?php echo "Capitulo ".$url->getURL(1); ?></h2>
            </div>
            <p id="facaResumo">Agora faça um resumo sobre o capítulo estudado:</p>
            <input type="hidden" name="tipo" value="novo"/>
            <!--<div id="resumo">-->
            <textarea name="content" class="textArea" style="width:100%"></textarea>
                <!--<textarea name="resumo" class="textArea"></textarea>-->
           <!-- </div>-->
            <input type="submit" name="salvar" class="novo" value="Salvar">
        <?php } else {?>
            <div class="resumoEnviado">
                <div class="comImagem">
                    <img id="enviado" src="imagens/mensagem-enviada.jpg">
                </div>
            </div>
            <!--<h3>Resumo enviado com sucesso. Aguarde uma notificação para passar para o próximo capítulo.</h3>-->
        <?php } ?>     
    </form>
</section>