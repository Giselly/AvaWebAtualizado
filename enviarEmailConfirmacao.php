<?php

/* Inclui a classe do phpmailer */				
require("Classes/mail/PHPMailerAutoload.php");

/* Cria uma Instância da classe */
$mail = new PHPMailer();

/* 
 * CONFIGURAÇÕES BÁSICAS 
 *
 */

$remetente = 'avaweb@iteva.org.br';
$nomeRemetente = 'AVAWEB';
$senha = 'Iteva100';

$destinatario = $usuarioEmail[0]['email'] ;
$nomeDestinatario  = $usuarioEmail[0]['nome'];
/* Servidor */
$host = 'smtp.office365.com';
$assunto = 'Cadastro aprovado!';
$mensagem = "Olá {$usuarioEmail[0]['apelido']},</br>sua solicitação de cadastro foi aprovada. Você já pode efetuar seu primeiro login no AVAWEB!"
        ;
/* Configura os destinatários */
$mail->AddAddress($destinatario, $nomeDestinatario);
 
/* 
 * CONFIGURAÇÕES AVANÇADAS 
 * 
 */
				
/* Define que é uma conexão SMTP */
$mail->IsSMTP();
/* Define o endereço do servidor de envio */
$mail->Host = $host;
/* Utilizar autenticação SMTP */ 
$mail->SMTPAuth = true;
/* Protocolo da conexão */
$mail->SMTPSecure = "tls";
/* Porta da conexão */
$mail->Port = "587";
/* Email ou usu�rio para autenticação */
$mail->Username = $remetente;
/* Senha do usu�rio */
$mail->Password = $senha;
 
/* Configura os dados do remetente do email */
$mail->From = $remetente; // Seu e-mail
$mail->FromName = $nomeRemetente; // Seu nome
 
/* Configura a mensagem */
$mail->IsHTML(true); // Configura um e-mail em HTML
 
$mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
 
/* Configura o texto e assunto */
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem; // A mensagem em HTML

/* Envia o email */
$email_enviado = $mail->Send();

/* Mostra se o email foi enviado ou não */
if ($email_enviado) {  
	
} else {
    $to      = 'avaweb@iteva.org.br';
    $subject = 'Erro ao enviar email';
    $message = 'Não foi possível enviar o e-mail.<br /><br /><b>Informações do erro:</b> <br />' . $mail->ErrorInfo;
    $headers = 'From: giselly@iteva.org.br' . "\r\n" .
    'Reply-To: giselly@iteva.org.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    echo "Erro!";
}
?>