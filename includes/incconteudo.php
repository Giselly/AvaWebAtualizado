<?php

/** @var Usuario */
//$user = Usuario::getInstance();
//$dadosUser = $user->buscarPorID($idUsuario);

if(file_exists("includes/inc{$url->getURL(0)}.php")){
    include_once("includes/inc{$url->getURL(0)}.php");
}else{
    echo '<script language= "JavaScript">
            location.href="' . RAIZ . 'erro404";
          </script>';
    exit;
}