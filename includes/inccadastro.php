<?php

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();

/** Recebe o formulario */
    $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/**
 * Verifica se foi enviado via POST o form
 */
if (isset($_POST['enviar']) && is_string($_POST['enviar'])) {
    
    $senha = $usuarioBusiness->password($form['senha']);
    $dados = array(
        "nome" => $form['usuario'],
        "email" => $form['email'],
        "login" => $form['login'],
        "apelido" => $form['apelido'],
        "senha" => $senha
    );
    
    $usuarioBusiness->cadastrar($dados);
    //include_once('pages/pglogin.php');
} else {
    include_once('pages/pgcadastro.php');
}