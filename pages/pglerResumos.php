<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="tinymce/js/tinymce/tinyMCEpt_BR.js"></script>
<?php  $resumoBuscarPorId = $resumoBusiness->buscarPorId($url->getURL(2));  ?>
<section id="resumo">
    <h2 class="titulo"><?php echo "- Resumo -";?></h2>
    <h2 class="titulo"><?php echo "Capitulo ".$resumoBuscarPorId[0]['capitulo'];?></h2> <br>
    <div class="notificacao" style="min-height:200px; height: auto;">
        <h2 class="informacoesGerais">Nome: <span> <?php echo $resumoBuscarPorId[0]['nome'];?></span></h2>
        <h2 class="informacoesGerais">Data: <span> <?php echo $resumoBuscarPorId[0]['dataAtual'];?></span></h2>
        <div id="noti">
            <div class="textArea"><?php echo $resumoBuscarPorId[0]['resumo'];?></div> <br>
        </div>
    <a href="#Notificacao" rel="leanModal"><input type="button" class="novo" value="Enviar Notificação"></a>        
    </div>
</section>
<!-- Lightbox -->
<div id="Notificacao" class="caixaLightBox">
    <form action="" method="post">
        <div id="cabecalhoNotificacao">
            <p>Notificação</p>
            <a class="modal_close"></a>
        </div>        
        <div class="txt-notificacao">
           <?php
            if($resumoBuscarPorId[0]['aprovacao'] == 0){
                echo "<input type='radio' value='1' name='aprovacao'/>Aprovado"
                    ."<input type='radio' value='2' name='aprovacao'/>Reprovado</br>";
                echo '</br></br>';
                
            } else {
                echo 'Esse resumo já foi avaliado!';
                echo '</br></br>';
            }
            if(($resumoBuscarPorId[0]['notificacao']) == NULL && ($resumoBuscarPorId[0]['notificacao']) == '') {?>
                <input type="hidden" name="idResumo" value="<?php echo $resumoBuscarPorId[0]['id']; ?>" />
                <input type="hidden" name="idUsuario" value="<?php echo $resumoBuscarPorId[0]['idUsuario']; ?>" />
                <input type="text" name="assunto" text="Resumo" placeholder="Assunto..." style="width:60%; display: block; position: relative; margin: 10px; "/>
                <textarea name="content" style="width:100%; height: 100%;">Seu resumo foi aprovado! O próximo capítulo foi liberado!</textarea>
                
            <?php } else {    
                echo 'Uma notificacao já foi enviada!';
                echo '</br></br>';
                
            }?>
            <button id="salvar-notificacao" name="salvar" type="submit">Salvar</button>
         </div>
        
    </form>
</div>
