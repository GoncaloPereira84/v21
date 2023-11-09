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
	if(containsInjectionAttempt($_POST["emailPromotor"])){
		$response = "The given email address contains an attempt of system abuse.";
	}else{
        $subject = "Nova Inscrição para " . $_POST['form'] . ' | V21';

        $message = "
            <html>
            <head>
            </head>
            <body style='flex-direction: column;'>
            <div style='display: flex; justify-content:space-between;width: 100%;'>
            <h4>CANDIDATO/A</h4>
            <p>Nome:</p>
            <p>".$_POST["nomeCandidato"]."</p>
        </div>
        <div style='display: flex; justify-content:space-between;width: 100%;'>
            <h4>PROMOTORES</h4>
            <p>Nome do Promotor Líder:</p>
            <p>".$_POST["nomePromotor"]."</p>
        </div>
        <div style='display: flex; justify-content:space-between;width: 100%;'>
            <p>Morada:</p>
            <p>promotor</p>
        </div>
    
        <div style='display: block;'>
            <table style='border:none; width: 500px;'>
                <tr>
                    <td style='width:50%;'>Código-Postal:</td>
                    <td style='width:50%;'>Localidade:</td>
                </tr>
                <tr>
                    <td style='width:50%;'>".$_POST["cpPromotor"]."</td>
                    <td style='width:50%;'>".$_POST["localPromotor"]."</td>
                </tr>
            </table>
        </div>
    
        <div style='display: block;'>
            <table style='border:none; width: 500px;'>
                <tr>
                    <td style='width:50%;'>Cartão Cidadão Nº.:</td>
                    <td style='width:50%;'>NIF:</td>
                </tr>
                <tr>
                    <td style='width:50%;'>".$_POST["ccPromotor"]."</td>
                    <td style='width:50%;'>".$_POST["nifPromotor"]."</td>
                </tr>
            </table>
        </div>
    
        <div style='display: flex; justify-content:space-between;width: 100%;'>
            <p>Data de nascimento:</p>
            <p>".$_POST["dnPromotor"]."</p>
        </div>
        <div style='display: flex; justify-content:space-between;width: 100%;'>
            <p>Habilitações académicas:</p>
            <p>".$_POST["habsPromotor"]."</p>
        </div>
        <div style='display: flex; justify-content:space-between;width: 100%;'>
            <p>Situação profissional:</p>
            <p>".$_POST["profPromotor"]."</p>
        </div>
        <div style='display: block;'>
            <table style='border:none; width: 500px;'>
                <tr>
                    <td style='width:50%;'>Contacto</td>
                    <td style='width:50%;'>2º contacto:</td>
                </tr>
                <tr>
                    <td style='width:50%;'>".$_POST["contactoPromotor"]."</td>
                    <td style='width:50%;'>".$_POST["contacto2Promotor"]."</td>
                </tr>
            </table>
        </div>
        <div style='display: flex; justify-content:space-between;width: 100%;'>
            <p>E-mail:</p>
            <p>".$_POST["emailPromotor"]."</p>
        </div>";
        
                if($_POST["nomeEmpresa"] != '') {
                    $message .= "       
                        <h4>EMPRESA (CASO JÁ EXISTA)</h4>
                        <p>Nome/Denominação Social:</p>
                        <p>".$_POST["nomeEmpresa"]."</p>

                        <div style='display: block;'>
                            <table style='border:none; width: 500px;'>
                                <tr>
                                    <td style='width:50%;'>NIF:</td>
                                    <td style='width:50%;'>Data de constituição:</td>
                                </tr>
                                <tr>
                                    <td style='width:50%;'>".$_POST["nifEmpresa"]."</td>
                                    <td style='width:50%;'>".$_POST["dataConst"]."</td>
                                </tr>
                            </table>
                        </div>
                        
                        <p>Morada/Sede:</p>
                        <p>".$_POST["moradaEmpresa"]."</p>

                        <div style='display: block;'>
                            <table style='border:none; width: 500px;'>
                                <tr>
                                    <td style='width:50%;'>Código-Postal:</td>
                                    <td style='width:50%;'>Localidade:</td>
                                </tr>
                                <tr>
                                    <td style='width:50%;'>".$_POST["cpEmpresa"]."</td>
                                    <td style='width:50%;'>".$_POST["localEmpresa"]."</td>
                                </tr>
                            </table>
                        </div>

                        <p>Forma jurídica:</p>
                        <p>".$_POST["formaEmpresa"]."</p>

                        <div style='display: block;'>
                            <table style='border:none; width: 500px;'>
                                <tr>
                                    <td style='width:50%;'>CAE Principal:</td>
                                    <td style='width:50%;'>CAE's Secundários:</td>
                                </tr>
                                <tr>
                                    <td style='width:50%;'>".$_POST["caeEmpresa"]."</td>
                                    <td style='width:50%;'>".$_POST["cae2Empresa"]."</td>
                                </tr>
                            </table>
                        </div>
                        
                        <p>Contacto telefónico:</p>
                        <p>".$_POST["contactoEmpresa"]."</p>
                        <br>
                        <p>E-mail:</p>
                        <p>".$_POST["emailEmpresa"]."</p>
                        <br>
                        <p>Web:</p>
                        <p>".$_POST["siteEmpresa"]."</p>
                        <br>
                        <p>Nº. de trabalhadores atuais:</p>
                        <p>".$_POST["trabalhadoresEmpresa"]."</p>
                        <br>
                        <p>Forma jurídica:</p>
                        <p>".$_POST["formaEmpresa"]."</p>
                        <br>
                        <p>Setor de Atividade:</p>
                        <p>".$_POST["setorEmpresa"]."</p>
                        <br>
                        <p>Objeto Social:</p>
                        <p>".$_POST["objetoEmpresa"]."</p>
                        <br>
                        <p>Tipo de incubação:</p>
                        <p>".$_POST["tipoIncubacao"]."</p>
                        <br>
                    ";
                }


        $message .= "  
                <h4>APRESENTAÇÃO DO PROJETO/IDEIA</h4>
                <p>Descrição pormenorizada do projeto/ideia:</p>
                <p>".$_POST["descProjecto"]."</p>
                <br>
                <p>Razões que motivam a realização do projecto:</p>
                <p>".$_POST["razoesRealizacao"]."</p>
                <br>
                <p>Montante do investimento previsto (€ primeiros 2 anos):</p>
                <p>".$_POST["montante"]."</p>
                <br>
                <p>Postos de trabalho a criar (primeiros 2 anos):</p>
                <p>".$_POST["postosCriar"]."</p>
                <br>
                <p>Razões que motivam a apresentação da sua candidatura ao V21:</p>
                <p>".$_POST["razoesApresentacao"]."</p>
                <br>
                <p>Como teve conhecimento do V21:</p>
                <p>".$_POST["conhecimentoV21"]."</p>
                <br>
                <p>Quais as expectativas acerca da Incubadora?</p>
                <p>".$_POST["expectativas"]."</p>
                <br>
            </body>
            </html>
        ";
		require_once ($_SERVER['DOCUMENT_ROOT']."/ajax/PHPMailer/PHPMailerAutoload.php");

		$mail = new PHPMailer;

        $mail->Host = 'v21.pt';
        $mail->SMTPAuth = false;
        $mail->Port = 8080;
        $mail->CharSet = 'utf-8';
        $mail->setFrom($_POST["emailPromotor"], $_POST['nomeCandidato']);
        $mail->addAddress('inscricoes@v21.pt', 'V21 - Centro de Incubação Tecnológico de Viseu');
        $mail->isHTML(true);
	
      	$mail->Subject = $subject;
      	$mail->Body    = $message;

      	if(!$mail->send()) {
      		$erro = 'Não foi possível enviar o seu pedido de inscrição, por favor tente novamente mais tarde.';
      		$response["result"] = $erro;
      	}else{
      		$erro = 'Pedido de inscrição enviado com sucesso.';
      		$response["result"] = $erro;
      	}
	}
}else{
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
	$response["result"] = $erro;
}

echo json_encode($response);
exit;
