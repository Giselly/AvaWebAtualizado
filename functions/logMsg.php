<?php

function logMsg($userName, $userCpf, $userPermissao)
{    
    // data atual
    $date = date( 'd/m/Y' );
    $hora = date( 'H:i:s' ); 
    
    switch ( $userPermissao )
    {
        case 0:
            $userPermissao = 'Aluno';
            //$file = 'aluno.php';
            $file = 'aluno.xls';
            break;
 
        case 1:
            $userPermissao = 'Professor';
            //$file = 'professor.php';
            $file = 'professor.xls';
            break;
    }
    
    // verifica a permissão
    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    $msg = sprintf( "<tr style='text-align: center;'>"
                          . "<td>%s</td>"
                          . "<td>%s</td>"
                          . "<td>%s</td>"
                          . "<td>%s</td>"
                          . "<td>%s</td>"
                          . "</tr>%s", $date, $hora, $userName, $userCpf, $userPermissao, PHP_EOL );
    
    
 
    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );
}