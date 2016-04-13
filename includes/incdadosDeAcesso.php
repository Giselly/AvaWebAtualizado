<?php
include_once("pages/pgacesso.php");
include_once("functions/zipar.php");

if($url->posicaoExiste(1) &&  ($url->getURL(1) == "professores")) {
    include_once("responses/professor.xls");
} else if($url->posicaoExiste(1) &&  ($url->getURL(1) == "alunos")) {
    include_once("responses/aluno.xls");
} else if($url->posicaoExiste(1) &&  ($url->getURL(1) == "download")) {
    $nomeArquivos = array("aluno.xls", "professor.xls");
    zipar(date('dmYHis'), "zips/", $nomeArquivos, "responses/");
    include_once("responses/aluno.xls");
} else {
    //include_once("responses/aluno.xls");
}
//include_once("responses/aluno.xls");
//include_once("responses/professor.xls");
?>