<?php

include_once('../Classes/Config.inc.php');

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/* @var Url*/
$url = Url::getInstance();

/** @var Usuario */
$usuario = Usuario::getInstance();

/** Inicia a sessão */
session_start();
 var_dump($form);
 var_dump($_SESSION);
if (isset($_SESSION['login']) && is_string($_SESSION['login'])) {
    //var_dump($usuario);
    /** Edita a senha do usuario */
    echo $usuario->editarSenha($url->getURL(0), $usuario->password($form['senhaAtual']), $usuario->password($form['novaSenha']), $usuario->password($form['confirmarSenha']));
} else {
    
    /** Retorna a mensagem de erro caso o usuario não esteja logado */
    echo "Você não possui permissão para alterar a sua senha.";
}