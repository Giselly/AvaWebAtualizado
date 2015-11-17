<link rel='stylesheet' type='text/css' href='css/resumo.css'>

<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/js/tinymce/tinyMCEpt_BR.js"></script>

<section id="resumo">
    <form method="POST" id="resumo">
        <?php if($existeResumo == false) {
            ?>
            <h2 id="tituloCapitulo"><?php echo "Resumo";?></h2>
            <h2 id="tituloCapitulo"><?php echo "Capitulo ".$url->getURL(1); ?></h2>
            <input type="hidden" name="tipo" value="novo"/>
            <textarea name="content" class="textArea" style="width:100%"></textarea>
            <!--<textarea name="resumo" class="textArea"></textarea>-->
            <input type="submit" name="salvar" class="novo" value="Salvar">
        <?php } else {?>
            <h2 id="tituloCapitulo">Resumo Enviado!</h2>
            <h3 id="subtituloCapitulo">Aguarde uma notificação!</h3>
        <?php } ?>        
    </form>
</section>