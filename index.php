<?php

/** Inclui o arquivo de configurações gerais do projeto */
include_once('Classes/config.inc.php');

/** @var Url */
$url = Url::getInstance();

if ($url->getURL(0) == 'recuperaSenha') {
    include_once("includes/inc{$url->getURL(0)}.php");
} else if ($url->getURL(0) == 'cadastro') {
    include_once("includes/inc{$url->getURL(0)}.php");
} else if ($url->getURL(0) == 'redefine') {
    include_once("includes/inc{$url->getURL(0)}.php");
} else {
    if ($url->getURL(0) != 'login') {
        session_start();
        
        //var_dump($_SESSION);
        //exit;
        
        /** Verifica se a sessão existe */
        if (isset($_SESSION['login']) && is_string($_SESSION['login']) && is_string($_SESSION['senha'])) {
            
            //var_dump($_SESSION);
            //exit;
            
            /** @var Login */
            $usuarioBusiness = Usuario::getInstance();

            /** @var array dados do usuario logado */
            $dadosUsuario = $usuarioBusiness->buscarPorLogin(array('login' => $_SESSION['login'], 'senha' => $_SESSION['senha']));

            /**
             * ID do usuario logado
             * @var int
             */
            $idUsuario = $dadosUsuario[0]['id'];
            
            /**
             * Indica se o usuario é professor
             * @var int
             */
            $professor = $dadosUsuario[0]['professor'];
            
            /**
             * Indica se o usupario já foi validado
             * @var int
             */
            $primeiroLogin = $dadosUsuario[0]['primeiroLogin'];
            
            /**
             * Apelido do usuario logado
             * @var string
             */
            $apelido = $dadosUsuario[0]['apelido'];

            /**
             * Foto do usuario logado
             * @var string
             */
            $foto = $dadosUsuario[0]['foto'];

            /**
             * Capitulo atual do Usuario logado
             * @var int
             */
            $capituloAtual = $dadosUsuario[0]['capituloAtual'];
            
            
            
            
        } else {
            /** Caso não exista sessão, redireciona para a pagina de login */
            echo "<META http-equiv='refresh' content='0;URL=" . RAIZ . "login'> ";
            exit;
        }
        
        if($primeiroLogin == 1) {
            /** Incluindo o topo, conteudo e rodape */
            include_once('includes/inctopo.php');
            include_once('includes/incconteudo.php');
            include_once('includes/incrodape.php');
        } else {
            /*include_once ('pages/pgaguarde.php');*/
        }
    } else {
        
        include_once("includes/inc{$url->getURL(0)}.php");
    }
}