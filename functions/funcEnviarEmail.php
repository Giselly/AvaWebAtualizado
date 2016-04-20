<?php

/* Inclui a classe do phpmailer */				
require("Classes/mail/PHPMailerAutoload.php");
//require("../Classes/mail/PHPMailerAutoload.php");



/* 
 * CONFIGURAÇÕES BÁSICAS 
 *
 */
function sendMail($assunto,$mensagem,$destinatario,$nomeDestinatario, $reply = NULL, $replyNome = NULL){

/* Cria uma Instância da classe */
$mail = new PHPMailer();

$remetente = 'avaweb@iteva.org.br';
$nomeRemetente = 'AVAWEB';
$senha = 'Iteva100';
/* Servidor */
$host = 'smtp.office365.com';

/* Configura os destinatários */
$mail->AddAddress(utf8_decode($destinatario), utf8_decode($nomeDestinatario));
 
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
$mail->Username = utf8_decode($remetente);
/* Senha do usu�rio */
$mail->Password = $senha;
 
/* Configura os dados do remetente do email */
$mail->From = utf8_decode($remetente); // Seu e-mail
$mail->FromName = utf8_decode($nomeRemetente); // Seu nome
 
/* Configura a mensagem */
$mail->IsHTML(true); // Configura um e-mail em HTML
 
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
 
/* Configura o texto e assunto */
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem; // A mensagem em HTML
$mail->AltBody = trim(strip_tags($mensagem)); // A mesma mensagem em texto puro
 
/* Configura o anexo a ser enviado (se tiver um) */
//$mail->AddAttachment("foto.jpg", "foto.jpg");  // Insere um anexo
 
/* Envia o email */
$email_enviado = $mail->Send();

/* Mostra se o email foi enviado ou não */
if ($email_enviado) {
    
	echo "Email enviado!";
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
}
?>