<?php

$nomeArquivos = array();
function zipar($nomeZIP, $dirZIP, $nomeArquivos, $dirAdd){
 
$zip = new ZipArchive();
$nome = $dirZIP . $nomeZIP.".zip";
$zip->open($nome, ZIPARCHIVE::CREATE);
foreach($nomeArquivos as $nome) {
    $zip->addFile($dirAdd. $nome);
}
$zip->close();


/* Configuramos os headers que serão enviados para o browser
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.$nomeZIP.".zip".'"');
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($nomeZIP.".zip"));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');
//readfile($nomeZIP);
exit;*/
}
