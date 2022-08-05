<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

$email = isset($_POST['email']) ? $_POST['email'] : "";
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : "";
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : "";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';


if (isset($_POST['enviar'])) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        /*
        Crédito: https://pt.stackoverflow.com/questions/400902/smtp-debug-com-phpmailer
        SMTP::DEBUG_OFF (0): Desativar o debug 
        (você pode deixar sem preencher este valor, uma vez que esta opção é o padrão).
        SMTP::DEBUG_CLIENT (1): Imprimir mensagens enviadas pelo cliente.
        SMTP::DEBUG_SERVER (2): 
        similar ao 1, mais respostas recebidas dadas pelo servidor 
        (esta é a opção mais usual).
        SMTP::DEBUG_CONNECTION (3): 
        similar ao 2, mais informações sobre a conexão inicial - 
        este nível pode auxiliar na ajuda com falhas STARTTLS.
        SMTP::DEBUG_LOWLEVEL (4): 
        similar ao 3, mais informações de baixo nível,
         muito prolixo, não use para debugar SMTP, 
         apenas em problemas de baixo nível */
     
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;//Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();     //Send using SMTP
     //Set the SMTP server to send through
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;  //Enable SMTP authentication
    //SMTP username
    $mail->Username   = 'rex.oliveira15@gmail.com';
    //SMTP password          
    $mail->Password   = 'qdwslhyjuoldrrlx'; 
    //Enable implicit TLS encryption                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    //TCP port to connect to; use 587 if you have set 
    //`SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Port       = 465; 

        //Recipients
        $mail->setFrom('rex.oliveira15@gmail.com', 'Dashborad');
        //Adicionar um destinatário
        $mail->addAddress($email, $nome);     
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        /* $mail->addAttachment('/var/tmp/file.tar.gz');   */       //Add attachments
        /* $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  */   //Optional name

        //Content
        $mail->isHTML(true); 
        //Aqui está o assunto                                 //Set email format to HTML
        $mail->Subject = $assunto;
        //Este é o corpo da mensagem HTML <b>em negrito!</b>
        $mail->Body    = $mensagem;
        //Este é o corpo em texto simples para clientes de e-mail não HTML
        $mail->AltBody = '';

        $mail->send();
    
        //Atualiza a página depois do envio
        /* header("Refresh: 0; url=contato_modal.html"); */
        $retorno = "E-mail enviado!";
    } catch (Exception $e) {
        $retorno = "A mensagem não pôde ser enviada. 
    Erro de correspondência: {$mail->ErrorInfo}";
    }
} else {
    $retorno = "Acesso negado pela url.";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menssagem de envio de E_MAIL</title>
    <style>
      body {
        background: #181a1e;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        color: white;
      }

      .mensagem {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        border-radius: 5px;
        width: 650px;
        max-width: 750px;
        background: #ffffffd8;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        color: gray;

      }
      span{
        color: #037e0381;
      }
      h1{
        color: rgba(0, 0, 0, 0.88);
      }

      span.mensagem_texto{
        font-size: 1.2rem;
        font-family: 'Courier New', Courier, monospace, Helvetica, sans-serif;
        font-style: italic;
        letter-spacing: 0.05rem;
      }
    </style>
  </head>

  <body>
    <section class="mensagem">
      <h1><?php echo "Contato por e-mail " ?><br/></h1>
      <h2><?php echo "Status do envio: " . "<span>".$retorno."</span>" ?> <br/> </h2>
      <h2><?php echo "Nome do remetente: " . "<span>".$nome."</span>" ?><br/></h2>
      <h2><?php echo "Email de retorno: " . "<span>".$email."</span>" ?><br/></h2>
      <h2><?php echo "Assunto: " . "<span>".$assunto."</span>"?><br /></h2>
      <h2><?php echo "Mensagem: " . "<span class=\"mensagem_texto\">
      ".$mensagem."</span>" ?>
      <br /></h2>
    </section>
  </body>
</html>
    
