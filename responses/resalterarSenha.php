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

if (isset($_SESSION['login']) && is_string($_SESSION['login'])) {
    if(isset($form)) {
        unset($form['enviar']);
        /** Edita a senha do usuario */
        $retorno =  $usuario->editarSenha($form['idUsuario'],$form['senhaAtual'], $form['novaSenha'], $form['confirmarSenha']);
        if($retorno == "true") {
            session_destroy();
       ?>
       
       <script>
           alert("Você será redirecionado para tela de login para logar-se com a nova senha!");
         
       </script> 
       
       <?php 

       echo "<META http-equiv='refresh' content='0;URL=" . RAIZ . "login'> ";
    } else {
        echo $retorno;
    }
    }
} else {
    
    /** Retorna a mensagem de erro caso o usuario não esteja logado */
    echo "Você não possui permissão para alterar a sua senha.";
}