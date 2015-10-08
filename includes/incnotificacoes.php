<?php
/** @var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();

if($url->posicaoExiste(1) && $url->getURL(1) == 'lerNotificacao'){
    
    /** Busca uma notificação específica */
    if($url->posicaoExiste(2)){
    $resumoBuscarPorId = $resumoBusiness->buscarPorID($url->getURL(2)); 
    $dados = array (
        "id" => $url->getURL(2),
        "notificacaoVisualizada" => 1
    );
    $resumoBusiness->editar($dados);
    }
    /** Include notificacao */   
    include_once("pages/pg{$url->getURL(1)}.php");
    
} else if($url->posicaoExiste(1) && $url->getURL(1) == 'Excluir' ) {
    $dados = array (
        "id" => $url->getURL(2),
        "excluidoNotificacao" => 1
    );
    $resumoBusiness->editar($dados);
} else {
    include_once('pages/pgnotificacoes.php');
}
