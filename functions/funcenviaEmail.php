<?php
    define('MAILUSER','avaweb@iteva.org.br');
    define('MAILPASS','Iteva100');
    define('MAILPORT','587');
    define('MAILHOST','smtp.office365.com');

    function sendMail($assunto,$mensagem,$remetente,$nomeRemetente,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL){

        require_once('Classes/mail/class.phpmailer.php'); //Include pasta/classe do PHPMailer

        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);

        $mail->Host = 'smtp.office365.com'; //Servidor de envio
        $mail->Port = 587; //Porta de envio
        $mail->Username = 'avaweb@iteva.org.br'; //email para smtp autenticado
        $mail->Password = 'Iteva100'; //seleciona a porta de envio

        $mail->From = utf8_decode($remetente); //remtente
        $mail->FromName = utf8_decode($nomeRemetente); //remtetene nome

        if($reply != NULL){
            $mail->AddReplyTo(utf8_decode($reply),utf8_decode($replyNome));
        }

        $mail->Subject = utf8_decode($assunto); //assunto
        $mail->Body = utf8_decode($mensagem); //mensagem
        $mail->AddAddress(utf8_decode($destino),utf8_decode($nomeDestino)); //email e nome do destino

        if($mail->Send()){
            return true;
        }else {
            return false;
        }
    }
?>