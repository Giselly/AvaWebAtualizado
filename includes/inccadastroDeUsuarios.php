<?php

/** Verifica se o usuario logado possui permissão de professor */
isProfessor($professor);

/** @var Usuario */
$usuarioBusiness = Usuario::getInstance();

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($url->posicaoExiste(1) && ($url->getURL(1) == 'ativar')) {
    $dados = array(
        "id" =>$url->getURL(2),
        "primeiroLogin" => 1
    ); 
    $usuarioBusiness->editar($dados);
    $usuarioEmail = $usuarioBusiness->buscarPorID($url->getURL(2));
    include_once ('enviarEmailConfirmacao.php');
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

        if (isset($_FILES["foto"])) {
            $foto = $_FILES["foto"];

            if (!empty($foto["name"])) {
                preg_match("/\.(gif|bmp|png|jpg|jpeg|ico){1}$/i", $foto["name"], $ext);

                /** Gera um nome único para a imagem */
                $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                /** Caminho de onde ficará a imagem */
                $caminho_imagem = "imagens/perfil/" . $nome_imagem;

                /** Faz o upload da imagem para seu respectivo caminho */
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                if ($url->getURL(1) == 'editar') {
                    $dadosUsuario = $usuarioBusiness->buscarPorID($form['id']);

                    if ($dadosUsuario[0]['foto'] != 'default.jpg') {
                        unlink('imagens/perfil/' . $dadosUsuario[0]['foto']);
                    }
                }

                $form['foto'] = $nome_imagem;
            }
        }
            //$form['senha'] = base64_encode($form['senha']);
        /** Verifica se o form é de cadastro ou atualização */
        if ($form['tipo'] == 'novo') {
            /** Remove o indice tipo da array */
            unset($form['tipo']);

            /** Executa o cadastro do usuario */
            $usuarioBusiness->cadastrar($form);
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
} elseif ($url->posicaoExiste(1) && $url->getURL(1) == 'excluir') {

    $erro = "";

    /** Executa a exclusão de um usuario */
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

    $erroExcluir = "<p class='erro'>Erro ao exlcuir o usuário '{$dadosUsuarioErro[0]['apelido']}'. Ele(a) está cadastrado em alguma das avaliações.</p>";
} else {
    $erroExcluir = "";
}

/** Include da pagina de configuração de perfil */
include_once("pages/pg{$url->getURL(0)}.php");
