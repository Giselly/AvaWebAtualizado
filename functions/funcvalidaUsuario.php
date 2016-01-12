<?php
    function validaUsuario($cpf) {
        /** Conecta com o banco */
        $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DBSA, USER, PASS);
        $pdo->exec("SET CHARACTER SET utf8");

        /** Escreve a query que seleciona o email e o nome do usuario */
        $verifica = $pdo->prepare("SELECT * FROM usuarios WHERE login = ? ");
        $verifica->bindValue(1, $cpf);
        //$verifica->bindValue(2, $email);

        /** Execulta a query */
        $verifica->execute();

        /** Se tiver achado alguem retorna os dados do usuario se não falso */
        return ($verifica->rowCount() == 1) ? $verifica->fetch(PDO::FETCH_OBJ) : false;
    }
?>