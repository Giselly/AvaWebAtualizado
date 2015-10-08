<?php
/**@var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();

foreach($dadosResumo as $resumo) {
    if($resumo['aprovacao'] == 0){
        $count++;
    }
}

$destinatario = "giselly.reboucas@iteva.org.br";
$nomeDestinatario = "Giselly Rebouças"; 

$assunto = 'josinaldo.batista@iteva.org.br';
$mensagem = 'AVAWEB';
require 'funcEnviarEmail.php';

?>