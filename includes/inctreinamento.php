<?php

/** @var string referencia do capitulo selecionado */
$refCapitulo = $url->posicaoExiste(1) ? $url->getURL(1) : "01";

/** @var string referencia do topico selecionado */
$refTopico = $url->posicaoExiste(3) ? $url->getURL(3) : "";

/** @var Capitulo */
$capituloBusiness = Capitulo::getInstance();

/** @var array listagem dos capitulos */
$capitulos = $capituloBusiness->Listar($capituloAtual);

if ($professor || (int) $refCapitulo < $capituloAtual + 2) {    
    /** Inclue a pagina de treinamentos */
    include_once("pages/pgtreinamento.php");
} else {
    isProfessor(0);
}