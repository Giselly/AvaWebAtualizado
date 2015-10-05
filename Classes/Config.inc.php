<?php

// FUNCOES GERAIS DO SISTEMA ###################################################
if (file_exists('functions/functions.php')) {
    include_once('functions/functions.php');
} elseif (file_exists('../functions/functions.php')) {
    include_once('../functions/functions.php');
}

// CONFIGRAÇÕES DO SITE ########################################################
/** @var string */ 
$host = is_string($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "" ; 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'vertrigo');
define('DBSA', 'avaweb');

define('RAIZ', "http://{$host}/AvaWeb/");

// AUTO LOAD DE CLASSES ########################################################
function __autoload($Class) {

    $cDir = array('DAO', 'Business', 'Entity', 'Exception');

    $iDir = null;

    foreach ($cDir as $dirName) {
        if (!$iDir && file_exists(__DIR__ . "/{$dirName}/{$Class}.class.php")) {
            include_once (__DIR__ . "/{$dirName}/{$Class}.class.php");
            $iDir = true;
        }
    }

    if (!$iDir) {
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
        die;
    }
}
