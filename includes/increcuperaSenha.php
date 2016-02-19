<?php

/**
 * @var string $info
 * @var string $erro
 * Cria as variaveis que vai fazer a interação com o usuario
 */
$info = '';
$erro = '';

/** Inclui a função de enviar email */
require_once('functions/funcEnviarEmail.php');

/** Inclui a função de validar se o usuario existe */
require_once('functions/funcvalidaUsuario.php');

/**
 * Verifica se foi enviado via POST o form
 */
if (isset($_POST['enviar']) && is_string($_POST['enviar'])) {
    /**
     * @var string $cpf
     * @var string $email
     * @var string $nomeRemetente
     * @var string $remetente
     * @var array $dados
     */
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $dados = validaUsuario($cpf);

    /** Checa se a função de validar o usuario deu certo */
    if ($dados) {
        /** Pega o id do usuario que está tentando recuperar a senha */
        $id = $dados->id;
       /** Nome do usuario que deseja recuperar a senha */
        $nome = $dados->nome;

        /** Pega a data atual em segundos */
        $data = strtotime(date("Y-m-d H:i:s"));

        /** Concatena a data atual com o id do usuario e criptografa em Base64 */
        $parametro = base64_encode($data . $id);

        /** @var string $mensagem */
        $mensagem = "Você pediu para recuperar a senha do Ambiente Virtual de Aprendizagem.<br/>
                     Click no link abaixo e redefina sua senha<br/>
                    <a href='" . RAIZ . "redefine/{$parametro}'>Redefinir senha.</a>
        ";

        /** Envia o email para o usuario */
        sendMail('Recuperação de senha do Ambiente Virtual de Aprendizagem', $mensagem, $email, $nome, '', '');

        /**
         * @var string $info
         * Informa o usuario do envio do email
         */
        $info = "Acesse seu email para redefinir a senha.";

        /** Redireciona pro login */
        echo "<meta http-equiv='refresh' content=5;url='" . RAIZ . "login'>";
    } else {
        /**
         * @var string $erro
         * Informa o usuario se não tiver enviado o email
         */
        $erro = "CPF não cadastrado.";
    }
}

/**
 * @var string $info
 * @var string $erro
 * Retorna alguma interação para o usuario
 */
$info = ($info != '') ? "<p class='info'>{$info}</p>" : '';
$erro = ($erro != '') ? "<p class='erro'>{$erro}</p>" : '';

/** Inclui a pagina de envio de email */
include_once('pages/pgrecuperaSenha.php');
 