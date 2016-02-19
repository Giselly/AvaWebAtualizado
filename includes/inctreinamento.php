<?php

/** @var string referencia do capitulo selecionado */
$refCapitulo = $url->posicaoExiste(1) ? $url->getURL(1) : "0" . $capituloAtual;

/** @var string referencia do topico selecionado */
$refTopico = $url->posicaoExiste(3) ? $url->getURL(3) : "";

/** @var Capitulo */
$capituloBusiness = Capitulo::getInstance();

/** @var array listagem dos capitulos */
$pastas = $capituloBusiness->Listar($capituloAtual);
$capitulos = array();

for ($i = 0; $i <= count($pastas);  $i++) {
    if ($i < 10)
        $cap = "0" . $i;
    else
        $cap = $i;

    if (isset($pastas[$cap])) {
        sort($pastas[$cap]);
        $capitulos[$cap] = $pastas[$cap];
    }
}

if ($professor || (int) $refCapitulo < $capituloAtual + 2) {
    /** Inclue a pagina de treinamentos */
    include_once("pages/pgtreinamento.php");
} else {
    isProfessor(0);
}