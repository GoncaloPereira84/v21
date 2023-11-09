<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = array();

$error = "";

ini_set('display_errors', 1); 
error_reporting(E_ALL);

// function containsInjectionAttempt($input) {
//     if (stristr("\r", $input) ||
//     stristr("\n", $input) ||
//     stristr("%0a", $input) ||
//     stristr("%0d", $input) ||
//     stristr("Content-Type:", $input) ||
//     stristr("bcc:", $input) ||
//     stristr("to:", $input) ||
//     stristr("cc:", $input)) {
//         return true;
//     } else {
//         return false;
//     }
// }

include $_SERVER['DOCUMENT_ROOT'].'/config/start.php';


if(isset($_POST["email"])){
	if(containsInjectionAttempt($_POST["email"])){
		$response = "The given email address contains an attempt of system abuse.";
	}else{
		$email_query = "SELECT * 
			from email_notifs
			where email = " . $_POST["email"];

		$result_s = mysqli_query($conn, $email_query);
		$email = array();

		if($result_s == false) {
			$subject = "Subscrição Website | V21";

			$message = "
				<html>
				<head>
				</head>
				<body>
					<p>Equipa da V21,</p>
					<p>
						Foi recebido um pedido de notificação de aviso para quando o website da V21 estiver pronto.
						O e-mail ".$_POST["email"]." foi adicionado à lista.
					</p>
					<p>
						*** Não responder a este e-mail ***
					</p>
				</body>
				</html>
			";
			// require_once ($_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/PHPMailerAutoload.php");

			require $_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/src/Exception.php";
			require $_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/src/PHPMailer.php";
			require $_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/src/SMTP.php";

			// Instantiation and passing `true` enables exceptions
			$mail = new PHPMailer(true);

			$mail->Host = 'www.v21.pt';
			$mail->SMTPAuth = true;
			$mail->Port = 8080;
			$mail->CharSet = 'utf-8'; 
			$mail->setFrom($_POST["email"]);
			$mail->addAddress("geral@v21.pt","V21");
			$mail->isHTML(true);
		
			$mail->Subject = $subject;
			$mail->Body    = $message;

			if(!$mail->send()) {
				$erro = 'Não foi possível enviar o seu pedido de notificação, por favor tente novamente mais tarde.';
				$response["error"] = $erro;
			}else{
				$sql_insert = "INSERT INTO email_notifs 
					(email) 
					VALUES
					('" . $_POST["email"] . "');";

				include_once($_SERVER['DOCUMENT_ROOT'].'/connection/class.connection.php');
				$db = Database::getInstance();
				$connection = $db->getConnection();
				if ($result = $connection->query($sql_insert)) {
					$db->commitAndClose();
					// echo "true||" . json_encode($result);
					$erro = 'Pedido de notificação enviado com sucesso.';
					$response["result"] = $erro;
				} else {
					// $db->rollbackAndClose();
					// echo "false||Erro na inserção dos dados.";
					$erro = 'Erro na inserção dos dados.';
					$response["result"] = $erro;
				}
		
				// $erro = 'Pedido de notificação enviado com sucesso.';
				// $response["result"] = $erro;
			}
		} else {
			while ($row_s = mysqli_fetch_assoc($result_s)) {
				$email[] = $row_s;
			}

			$erro = 'O e-mail fornecido já se encontra na lista.';
      		$response["result"] = $erro;
		}
	}
}else{
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
	$response["result"] = $erro;
}

echo json_encode($response);
exit;
