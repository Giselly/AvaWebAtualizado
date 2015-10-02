<?php

/* Inclui a classe do phpmailer */				
require("Classes/mail/PHPMailerAutoload.php");

/* Cria uma Instância da classe */
$mail = new PHPMailer();

/** Quantidade de resumos pra ler e analisar */
/** Conecta com o banco */
    $value =0;
    
    $pdo = new PDO('mysql:dbname=avaweb;host=127.0.0.1',  'root', 'vertrigo');
    $pdo->exec("SET CHARACTER SET utf8");

    $query = $pdo->prepare("SELECT id, resumoVisualizado, aprovacao FROM resumo WHERE resumoVisualizado = :value");
    $query->bindValue(':value', $value, PDO::PARAM_INT);

    /** Executa a query */
    $query->execute();
    
    $dadosResumo = $query->fetchAll();
    
   $visualizarResumo = 0;
    $aprovacao = 0;
foreach ($dadosResumo as $resumo) {
        if($resumo['resumoVisualizado'] == 0) {
            $visualizarResumo++;
        }
        if($resumo['resumoVisualizado'] == 0 && $resumo['aprovacao'] == 0){
            $aprovacao++;
        }
}

/* 
 * CONFIGURAÇÕES BÁSICAS 
 *
 */
$remetente = 'avaweb@iteva.org.br';
$nomeRemetente = 'AVAWEB';
$senha = 'Iteva100';

$destinatario = 'giselly.reboucas@iteva.org.br' ;
$nomeDestinatario  = 'Giselly Rebouças';
/* Servidor */
$host = 'smtp.office365.com';
$assunto = 'Novos Resumos!';
$mensagem = "
        <div style='padding-left: 25%; padding-right: 25%; width: 100%; '>
        <div id='content' style='background-color: #005a98; display: block; position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; margin: auto; width: 550px; height:685px; border: 10px solid #012138;'>
            <div style='padding-left: 160px; padding-right: 160px;'>
                <img alt='' src='http://iteva.org.br/ava/imagens/logo_vertical.jpg' style='display: block; position: relative; /*margin: auto;*/'/>
            </div>
            
            <div  id='texto' style='display: block; position: absolute; padding: 25px 25px 0px 25px;/*top: 0px; bottom: 0px; left: 0px; right: 0px; margin: auto;*/ width: 500px; height: 225px;'>
                <h1 style='font-family: Arial,sans-serif; text-align: center; color: #fff; font-size: 22pt; font-weight: bold;'>AVAWEB | NOVOS RESUMOS</h1>
                <p style='font-family: Arial,sans-serif; text-align: center; font-size: 20pt; color: #fff;'>Você tem ".$visualizarResumo." resumo(s) para visualizar <br/>
                    E ".$aprovacao." resumo(s) para analisar <br/></br>
                    <a href='http://ava.iteva.org.br' style='font-size: 15pt; color: #fff; text-decoration: none;'>Clique para ser redirecionado ao AVAWEB!<a></p>
            </div>
            
            <style>
                a:hover { text-decoration: underline;}
            </style>

            <img id='gif' alt='' src='http://iteva.org.br/ava/imagens/email.gif' style='display: block; position: absolute; top: 450px; padding: 0px 180px;/*bottom: 0px; left: 0px; right: 0px; margin: auto;*/ width: 193px;  height: 237px;'/>      
        </div>
        </div>";
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
$mail->Body = utf8_encode($mensagem); // A mensagem em HTML

//$mail->AddAttachment('http://iteva.org.br/ava/imagens/', 'backgroundEmail.jpg');
//$mail->AddAttachment('http://iteva.org.br/ava/imagens/','email.gif');
//$mail->AddEmbeddedImage("imagens/backgroundEmail.jpg", "backgroundEmail", "backgoundEmail.jpg");
//$mail->AddEmbeddedImage("imagens/email.gif", "email", "email.gif");
//$mail->AltBody = '<img src = "http://iteva.org.br/ava/imagens/backgroundEmail.jpg" alt="">'
// A mesma mensagem em texto puro
 
/* Configura o anexo a ser enviado (se tiver um) */
//$mail->AddAttachment("foto.jpg", "foto.jpg");  // Insere um anexo
 
/* Envia o email */
$email_enviado = $mail->Send();

/* Mostra se o email foi enviado ou não */
if ($email_enviado) {
    
	echo "Email enviado!";
        echo $mensagem;
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