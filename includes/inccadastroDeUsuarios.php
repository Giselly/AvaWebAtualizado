<?php

/** Verifica se o usuario logado possui permissão de professor */
isProfessor($professor);

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/** Ativar e desativar usuários */
if ($url->posicaoExiste(1) && ($url->getURL(1) == 'ativar')) {
    $dados = array(
        "id" =>$url->getURL(2),
        "primeiroLogin" => 1
    ); 
    $usuarioBusiness->editar($dados);
    $usuarioEmail = $usuarioBusiness->buscarPorID($url->getURL(2));
    
    /* Função para enviar email de confirmação*/
    include_once ('functions/funcenviaEmail.php');
    
    $assunto = 'Cadastro Aprovado';
    $mensagem = "
        <div style='display: block; position: relative; width: 500px; height: 400px; border: 2px solid #004c98;'>
            <div style='display: block; position: relative; padding-left: 175px; padding-right: 175px; padding-top: 15px;'>
                <img src='cid:iteva'>
            </div>
            <div style='display: block; position: relative; margin: 5px; padding: 20px;'>
                <p style='font-size: 14pt;'>Olá {$usuarioEmail[0]['apelido']}, <br/> sua solicitação de cadastro foi aprovada. Você já pode efetuar seu primeiro login no AVAWEB!</p>
                <a href='http:\\ava.iteva.org.br' style='display: block; text-align: center; font-size: 14pt;'>Clique para ser redirecionado ao AVAWEB</a>
            </div>
        </div>";
    $destino = $usuarioEmail[0]['email'];  
    $nomeDestino = $usuarioEmail[0]['email'];
    sendMail($assunto, $mensagem, $destino, $nomeDestino,'','');
    
    echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}';</script>";
    
} else if ($url->posicaoExiste(1) && ($url->getURL(1) == 'desativar')){
    $dados = array(
        "id" =>$url->getURL(2),
        "primeiroLogin" => 0
    ); 
    $usuarioBusiness->editar($dados);
    echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}';</script>";
}
    
/** Include o formulario de cadastro/edição de funcionarios */
if ($url->posicaoExiste(1) && ($url->getURL(1) == 'novo' || $url->getURL(1) == 'editar')) {
    /** Verifica se o form foi enviado */
    if (isset($form['cadastrar'])) {

        /** Remove o indice cadastrar da array */
        unset($form['cadastrar']);

        
        /** Verifica se o form é de cadastro ou atualização */
            if ($form['tipo'] == 'novo') {
                /** Remove o indice tipo da array */
                unset($form['tipo']);

                /** Executa o cadastro do usuario */
                $usuarioBusiness->cadastrar($form);
                echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}';</script>";
            } else {
                /** Remove o indice tipo da array */
                unset($form['tipo']);

                /** Executa a atualização de um usuario */
                $usuarioBusiness->editar($form);

            }

            /** Redireciona para a listagem */
            echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}';</script>";
            exit;
    }

    if ($url->getURL(1) == 'editar') {
        $dadosUsuario = $usuarioBusiness->buscarPorID($url->getURL(2));
        /** Definindo url da foto */
        $foto = $dadosUsuario[0]['foto'];
    } else {
        $foto = "default.jpg";
    }

    /** Include da pagina de configuração de perfil */
    include_once("pages/pgForm{$url->getURL(0)}.php");
    exit;
} 

if ($url->posicaoExiste(1) && $url->getURL(1) == 'excluir') {
    $erro = "";

    /** Executa a exclusão de um usuario */
    //echo $usuarioBusiness->excluir($url->getURL(2));exit(1);
    try {
        $usuarioBusiness->excluir($url->getURL(2));
        
        echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}';</script>";
    } catch (Exception $ex) {
        echo "<script>window.location = '" . RAIZ . "{$url->getURL(0)}/erro/{$url->getURL(2)}';</script>";
    }

    exit;
}


if(isset($form['filtro'])){
    $filtro = array(
        'nome' => "%{$form['filtro']}%",
        'email' => "%{$form['filtro']}%",
    );
}else{
    $filtro = array();
}
/** @var array */
$dadosUsuarios = $usuarioBusiness->buscar($filtro);

if ($url->posicaoExiste(1) && $url->getURL(1) == 'erro') {

    /** Dados usuario erro ao exlcuir */
    $dadosUsuarioErro = $usuarioBusiness->buscarPorID($url->getURL(2));

    $erroExcluir = "<p class='erro'>Erro ao excluir o usuário '{$dadosUsuarioErro[0]['apelido']}'.</p>";
} else {
    $erroExcluir = "";
}

/** Include da pagina de configuração de perfil */
include_once("pages/pg{$url->getURL(0)}.php");
