<?php
$response = array();

$error = "";

function containsInjectionAttempt($input) {
    if (stristr("\r", $input) ||
    stristr("\n", $input) ||
    stristr("%0a", $input) ||
    stristr("%0d", $input) ||
    stristr("Content-Type:", $input) ||
    stristr("bcc:", $input) ||
    stristr("to:", $input) ||
    stristr("cc:", $input)) {
        return true;
    } else {
        return false;
    }
}

if(isset($_POST)){
	if(containsInjectionAttempt($_POST["email"])){
		$response = "The given email address contains an attempt of system abuse.";
	}else{
        $subject = "Nova Mensagem de contacto | ".$_POST["assunto"]." | V21";

        $message = "
            <html>
            <head>
            </head>
            <body>
                <p>Nome:</p>
                <p>".$_POST["nome"]."</p>
                <br>
                <p>E-mail:</p>
                <p>".$_POST["email"]."</p>
                <br>";

                if($_POST["telefone"] != '') {
                    $message .= "
                    <p>Telefone:</p>
                    <p>".$_POST["telefone"]."</p>
                    <br>
                    ";
                }
                
        $message .= "<p>Mensagem:</p>
                <p>".$_POST["mensagem"]."</p>
            </body>
            </html>
        ";
		require_once ($_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/PHPMailerAutoload.php");

		$mail = new PHPMailer;

    $mail->Host = 'v21.pt';
    $mail->SMTPAuth = false;
    $mail->Port = 8080;
    $mail->CharSet = 'utf-8';
    $mail->setFrom($_POST["email"], $_POST['nome']);
    $mail->addAddress('geral@v21.pt', 'V21 - Centro de Incubação Tecnológico de Viseu');
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body    = $message;

    if(!$mail->send()) {
      $erro = 'Não foi possível enviar a sua mensagem, por favor tente novamente mais tarde.';
      $response["result"] = $erro;
    }else{
      $erro = 'Mensagem enviada com sucesso.';
      $response["result"] = $erro;
    }
	}
}else{
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
	$response["result"] = $erro;
}

echo json_encode($response);
exit;

error:{
	$response["result"] = $error;
  echo json_encode($response);
  exit;
}
?>