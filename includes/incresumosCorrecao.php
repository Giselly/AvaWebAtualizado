<?php

/** Verifica se o usuario logado possui permissão de professor */
isProfessor($professor);

/**@var Resumo */
//$resumoBusiness = Resumo::getInstance();

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();

/** busca dados da tabela resumo no banco*/
//$dadosResumo = $resumoBusiness->buscar();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($url->posicaoExiste( 1) && $url->getURL(1) == 'lerResumos'){ 
    /** Include da pagina do resumo */   
    include_once("pages/pg{$url->getURL(1)}.php");
        
} else if($url->posicaoExiste( 1) && $url->getURL(1) == 'Excluir') {
    $dados = array (
        "id" => $url->getURL(2),
        "excluidoResumo" => 1
    
    );
    $resumoBusiness->editar($dados);
} else {
    /** Include da pagina de resumos para correção */
    include_once("pages/pgresumosCorrecao.php");
}

if(isset($form['salvar'])){
        $dados = array(
            "id" => $url->getURL(2),
            "assunto" => isset($form["assunto"]) ? $form["assunto"]: NULL,
            "notificacao" => isset($form["content"]) ? $form["content"]: NULL,
            "dataNotificacao" => isset($form["content"]) ? date('Y-m-d') : NULL,
            "aprovacao"=> ($form["aprovacao"]!= 0) ? $form["aprovacao"] : 0
        );
    
    $resumoBusiness->editar($dados);
    if($form["aprovacao"] == 1){
    $dadosUsuario = array (
        "id" => $form["idUsuario"],
        "capituloAtual" => $capituloAtual+1
    );   
       
    $usuarioBusiness->editar($dadosUsuario);
    }
    var_dump($dadosUsuario);
} else if($url->posicaoExiste(1) && $url->getURL(1) == 'lerNotificacao'){
    
    /** Busca uma notificação específica */
    if($url->posicaoExiste(2)){
    $resumoBuscarPorId = $resumoBusiness->buscarPorID($url->getURL(2)); 
    $dados = array (
        "id" => $url->getURL(2),
        "resumoVisualizado" => 1
    );
    $resumoBusiness->editar($dados);
    }
    /** Include notificacao */   
    include_once("pages/pg{$url->getURL(1)}.php");
}
