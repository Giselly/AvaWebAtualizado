<link rel='stylesheet' type='text/css' href='css/resumo.css'>
<link rel='stylesheet' type='text/css' href='css/font.css'>

<?php

/**@var Resumo */
//$resumoBusiness = Resumo::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($form['salvar'])){
    $dados = array(
       "idUsuario" =>  $idUsuario,
       "capitulo" => $url->getURL(1),
       "resumo" => str_replace("../../tinymce/js/tinymce/plugins/emoticons", "tinymce/js/tinymce/plugins/emoticons", $form['content']),
       "dataAtual" => date('Y-m-d')
    );
    
    /** cadastra os dados no banco*/
    $resumoBusiness->cadastrar($dados);
    
     
    echo'<h3>Resumo enviado com sucesso. Aguarde uma notificação para passar para o próximo capítulo.</h3>';

    /*$destinatario = "jlarteedesign@gmail.com";
    $destinatario = "giselly.reboucas@iteva.org.br";
    $nomeDestinatario = "Giselly Rebouças"; 
    $assunto = "Novos Resumos!";
    $res = strlen($form['content']) > 150 ? substr($form['content'], 0, 150)."..." : $form['content'];
    $res = trim(strip_tags($form['content']));
    $mensagem = "<p style='margin-left: 20px;'>Um novo resumo foi recebido. Você pode visualizá-lo no <strong>AVAWEB!</strong></p>"
            . "<p style='margin-left: 20px;'>{$apelido} enviou um resumo do Capítulo {$url->getURL(1)}. Ele(a) está aguardando uma aprovação!</p>"
            . "<div style='max-width: 700px; height: auto; border: 1px solid #000; box-shadow: 2px 2px 2px #000; padding: 5px;'>{$res}</br></br><a href='www.google.com' target='_blank'>Clique aqui para ser redirecionado ao AVAWEB!</a></div>";        
    require_once("functions/funcEnviarEmail.php");*/
} else {
   
    /** Busca dados da tabela resumo no banco */
    //$dadosResumo = $resumoBusiness->buscar();
    
    /** Verifica se há algum resumo do capitulo atual feito pelo usuário que está logado no banco de dados */
    $existeResumo = false;
    foreach ($dadosResumo as $resumo){
        if(($resumo["capitulo"] == $url->getURL(1)) && ($resumo["idUsuario"] == $idUsuario) && $resumo["aprovacao"] != 2){
            $existeResumo = true;
        } 
    }
    include_once('pages/pgresumo.php');
}
