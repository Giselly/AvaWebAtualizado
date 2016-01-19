<?php

/** seta o fuso horario padrão com o de fortaleza */
date_default_timezone_set("America/Fortaleza");

/** @var Questao */
$questoesBusiness = Questao::getInstance();

/** @var array dados das questoes selecionadas */
$questoes = $questoesBusiness->buscarPorCapitulo((int) $url->getURL(1), $idUsuario);

/** @var Exercicio */
$exerciciosBusiness = Exercicio::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($form['salvar'])) {

    /** @var int pontuação total do aluno */
    $sum = 0;

    /**  */
    $qtdQuestoes = 0;

    /** */
    unset($form['salvar']);

    /** */
    foreach ($form as $questao => $resposta) {
        $res = $questoesBusiness->buscarItem($resposta);
        $sum += $res[0]['valor'];
        $qtdQuestoes++;
    }

    /** */
    $nota = ($sum * 10) / $qtdQuestoes;

    /** */
    $dados = array(
        "idCapitulo" => $url->getURL(1),
        "idUsuario" => $idUsuario,
        "nota" => $nota,
        "data" => date("Y-m-d H:i:s")
    );

    /** */    
    $exerciciosBusiness->cadastrar($dados);
    
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0';>";
} else {   
    $exercicios = $exerciciosBusiness->buscarPorCapituloUsuario((int) $url->getURL(1), $idUsuario);
    include_once('pages/pgexercicio.php');
}