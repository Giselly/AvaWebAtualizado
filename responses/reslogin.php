<?php
include_once('../Classes/config.inc.php');

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/** @var Login */
$login = Login::getInstance($form['login'], $form['senha']);

/** @var Usuario */
$user = Usuario::getInstance();

/** @var array */
$usuario = $login->consultar();

/** Verifica se o login é válido e cria uma nova sessão */

if(count($usuario) > 0 && $usuario[0]['primeiroLogin'] == '0') {
    echo '-1';
    exit;
} else if(count($usuario) > 0){
    session_start();
    $_SESSION['login'] = $usuario[0]['login'];
    $_SESSION['senha'] = $usuario[0]['senha'];
}
?>

<!--<input id="capituloAtual" type="text" value="<?php echo $usuario[0]['capituloAtual']?>">-->
/*if($usuario[0]['primeiro_login'] == 0) {
    $dados = array(
     "id" => $usuario[0]['id'],   
     "primeiro_login" => 1
    );
}
:
$user->editar($dados);*/
<?php
/** Retorna a quantidade de usuarios retornados na consulta */
echo count($usuario);