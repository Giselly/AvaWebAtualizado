<?php

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($form)) {
    unset($form['enviar']);
    /** Executa a atualização de um usuario */
    $usuarioBusiness->editar($form);
}

/** @var array */
$dadosUsuario = $usuarioBusiness->buscarPorID($idUsuario);

/** Include da pagina de alterarção de login */
include_once('pages/pgalterarDados.php');
