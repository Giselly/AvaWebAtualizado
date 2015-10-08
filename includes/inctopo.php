<?php
/** @var string */
$arqJS = "";

/** @var string */
$arqCSS = "";

/* * Verifica se o arquivo de js da pagina atual existe */
if (file_exists("js/{$url->getURL(0)}.js")) {
    $arqJS = "<script src='js/{$url->getURL(0)}.js'></script>";
}

/* * Verifica se o arquivo de css da pagina atual existe */
if (file_exists("css/{$url->getURL(0)}.css")) {
    $arqCSS = "<link rel='stylesheet' type='text/css' href='css/{$url->getURL(0)}.css'>";
}

/** @var Resumo */
$resumoBusiness = Resumo::getInstance();

/** busca dados da tabela resumo no banco*/
$dadosResumo = $resumoBusiness->buscar();
$visualizar = 0;
$visualizarResumo = 0;
$aprovacao = 0;
foreach ($dadosResumo as $resumo) {
        if($resumo['idUsuario'] == $idUsuario && $resumo['notificacaoVisualizada'] == 0 && ($resumo['notificacao'] != NULL || $resumo['notificacao'] != '')){
            $visualizar++;
        }
        if($resumo['resumoVisualizado'] == 0 ) {
           $visualizarResumo++; 
        }
        if($resumo['resumoVisualizado'] == 0 && $resumo['aprovacao'] == 0){
            $aprovacao++;
        }
}

/** Inclue a pagina do topo */
include_once('pages/pgtopo.php');

/** Recebe o formulario */
$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($form['editar'])) {
    unset($form['editar']);
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

            $dadosUsuario = $usuarioBusiness->buscarPorID($idUsuario);
                if ($dadosUsuario[0]['foto'] == 'default.jpg') {
                unlink('imagens/perfil/' . $dadosUsuario[0]['foto']);
            }

            $form['foto'] = $nome_imagem;
            $foto = $nome_imagem;
            //var_dump($nome_imagem);
            //var_dump($caminho_imagem);
        }
    }
    $dados = array(
        "id" => $idUsuario,
        "foto" =>$form['foto']
    );
    
    $usuarioBusiness->editar($dados);
}
//}