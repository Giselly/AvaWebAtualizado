<?php
    
    // Aqui você se conecta ao banco
    $mysqli = new mysqli('localhost', 'root', 'vertrigo', 'ava');
    
    // Executa uma consulta que pega cinco notícias
    $sql = "SELECT COUNT(*) as aprovacao FROM `resumo` WHERE `aprovacao` = 0";
    $query = $mysqli->query($sql);
    $result = $query->fetch_assoc();
    var_dump($result);
    echo $result['aprovacao'];

    $mysqli->close();
    /** Se tiver atualizado retorna verdadeiro se não falso 
        return ($atualiza->rowCount() == 1) ? true : false;
*/
    

/**@var Resumo 
$resumoBusiness = Resumo::getInstance();*/

/** busca dados da tabela resumo no banco
$dadosResumo = $resumoBusiness->buscar();

foreach($dadosResumo as $resumo) {
    if($resumo['aprovacao'] == 0){
        $count++;
    }
}*/

$destinatario = "giselly.reboucas@iteva.org.br";
$nomeDestinatario = "Giselly Rebouças"; 

$assunto = 'Resumos para corrigir - AVAWEB';



$mensagem = "<div style='display: block; position: relative; width: 500px; height: 400px; border: 2px solid #004c98;'>
            <div style='display: block; position: relative; padding-left: 175px; padding-right: 175px; padding-top: 15px;'>
                <img src='http://iteva.org.br/ava/imagens/marca.png'>
            </div>
            <div style='display: block; position: relative; margin: 5px; padding: 20px;'>
                <p style='font-size: 14pt;'>Há {$result['aprovacao']} para corrigir!</p>
                <a href='http:\\ava.iteva.org.br' style='display: block; text-align: center; font-size: 14pt;'>Clique para ser redirecionado ao AVAWEB</a>
            </div>
        </div>";
require 'funcEnviarEmail.php';
?>