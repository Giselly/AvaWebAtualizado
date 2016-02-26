<?php

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();
$dadosUser = $usuarioBusiness->buscar();
$user = array();
$i = 0;
foreach($dadosUser as $dados){
    $user['u'.$i]= $dados['login'];
    $i++;
}
$js_array = json_encode($user);

?>
<input id="array" type="hidden" value=<?php echo $js_array;?>>
<?php

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
    
    
    ?>
    <script>alert('Seu cadastro foi realizado, aguarde a confirmação.');</script>
<?php
include_once('pages/pglogin.php');
} else {
    include_once('pages/pgcadastro.php');
}