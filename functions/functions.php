<?php

// Formata data aaaa-mm-dd para dd/mm/aaaa
function databr($datasql) {
    if (!empty($datasql)) {
        $p_dt = explode('-', $datasql);
        $data_br = $p_dt[2] . '/' . $p_dt[1] . '/' . $p_dt[0];
        return print $data_br;
    }
}

// Formata data dd/mm/aaaa para aaaa-mm-dd
function datasql($databr) {
    if (!empty($databr)) {
        $p_dt = explode('/', $databr);
        $data_sql = $p_dt[2] . '-' . $p_dt[1] . '-' . $p_dt[0];
        return $data_sql;
    }
}

function removerUnderline($txt) {
    return str_replace("_", " ", $txt);
}

function inserirUnderline($txt) {
    return str_replace(" ", "_", $txt);
}

function isProfessor($professor) {
    if (!$professor) {
        echo '<script language= "JavaScript">
        alert("Você não possui permissão para acessar esta página.");
        location.href="' . RAIZ . 'treinamento/1/conteudo/1";
         </script>';
        exit;
    }
}
