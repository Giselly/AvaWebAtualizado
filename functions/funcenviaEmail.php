<?php
    /**
    * Inclui classes de envio de email
    */
    require_once('Classes/mail/class.phpmailer.php');
    
    function sendMail($assunto,$mensagem,$remetente,$nomeRemetente,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL){

        require_once('Classes/mail/class.phpmailer.php'); //Include pasta/classe do PHPMailer

        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        
        /* Protocolo da conexão */
        $mail->SMTPSecure = "tls";
        /* Porta da conexão */
        $mail->Port = "587";

        $mail->Host = 'smtp.office365.com'; //Servidor de envio
        $mail->Port = 587; //Porta de envio
        $mail->Username = 'avaweb@iteva.org.br'; //email para smtp autenticado
        $mail->Password = 'Iteva100'; //seleciona a porta de envio

        $mail->From = $remetente; //remtente
        $mail->FromName = $nomeRemetente; //remtetene nome
        
        /* Configura a mensagem */
        $mail->IsHTML(true); // Configura um e-mail em HTML
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)

        if($reply != NULL){
            $mail->AddReplyTo($reply,$replyNome);
        }

        $mail->Subject = $assunto; //assunto
        $mail->Body = $mensagem; //mensagem
        $mail->AddAddress($destino,$nomeDestino); //email e nome do destino

        if($mail->Send()){
            return true;
        }else {
            return false;
        }
    }
?>