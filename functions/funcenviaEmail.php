<?php
    /**
    * Inclui classes de envio de email
    */
    require_once('Classes/mail/class.phpmailer.php');
    
    function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL){

        require_once('Classes/mail/class.phpmailer.php'); //Include pasta/classe do PHPMailer

        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
        
        /* Protocolo da conexão */
        $mail->SMTPSecure = "ssl";

        $mail->Host = 'smtp.gmail.com'; //Servidor de envio
        $mail->Port = 465; //Porta de envio
        $mail->Username = 'nicolasmatos.iteva@gmail.com'; //email para smtp autenticado
        $mail->Password = 'iteva234'; //seleciona a porta de envio

        $mail->From = 'nicolasmatos.iteva@gmail.com'; //remetente
        $mail->FromName = 'Instituto Tecnológico e Vocacional Avançado - AVAWEB'; //nome remetente
        
        /* Enviar imagem */
        $mail->AddEmbeddedImage('Images/marca.png', 'iteva');
        
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