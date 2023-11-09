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
            <body>
                <h4>CANDIDATO/A</h4>
                <p>Nome:</p>
                <p>".$_POST["nomeCandidato"]."</p>
                <br>
                <h4>PROMOTORES</h4>
                <p>Nome do Promotor Líder:</p>
                <p>".$_POST["nomePromotor"]."</p>
                <br>
                <p>Morada:</p>
                <p>".$_POST["moradaPromotor"]."</p>

                <div style='display: flex; justify-content:space-between;'>
                    <div style='width: 48.5%;'>
                        <p>Código-Postal:</p>
                        <p>".$_POST["cpPromotor"]."</p>
                    </div>
                    <div style='width: 48.5%;'>
                        <p>Localidade:</p>
                        <p>".$_POST["localPromotor"]."</p>
                    </div>
                </div>

                <div style='display: flex; justify-content:space-between;'>
                    <div style='width: 48.5%;'>
                        <p>Cartão Cidadão Nº.:</p>
                        <p>".$_POST["ccPromotor"]."</p>
                    </div>
                    <div style='width: 48.5%;'>
                        <p>NIF:</p>
                        <p>".$_POST["nifPromotor"]."</p>
                    </div>
                </div>

                <p>Data de nascimento:</p>
                <p>".$_POST["dnPromotor"]."</p>
                <br>
                <p>Habilitações académicasr:</p>
                <p>".$_POST["habsPromotor"]."</p>
                <br>
                <p>Situação profissional:</p>
                <p>".$_POST["profPromotor"]."</p>                

                <div style='display: flex; justify-content:space-between;'>
                    <div style='width: 48.5%;'>
                        <p>Contacto:</p>
                        <p>".$_POST["contactoPromotor"]."</p>
                    </div>
                    <div style='width: 48.5%;'>
                        <p>2º contacto:</p>
                        <p>".$_POST["contacto2Promotor"]."</p>
                    </div>
                </div>

                <p>E-mail:</p>
                <p>".$_POST["emailPromotor"]."</p>
                <br>";
        
                if($_POST["nomeEmpresa"] != '') {
                    $message .= "       
                        <h4>EMPRESA (CASO JÁ EXISTA)</h4>
                        <p>Nome/Denominação Social:</p>
                        <p>".$_POST["nomeEmpresa"]."</p>

                        <div style='display: flex; justify-content:space-between;'>
                            <div style='width: 48.5%;'>
                                <p>NIF:</p>
                                <p>".$_POST["nifEmpresa"]."</p>
                            </div>
                            <div style='width: 48.5%;'>
                                <p>Data de constituição:</p>
                                <p>".$_POST["dataConst"]."</p>
                            </div>
                        </div>
                        
                        <p>Morada/Sede:</p>
                        <p>".$_POST["moradaEmpresa"]."</p>

                        <div style='display: flex; justify-content:space-between;'>
                            <div style='width: 48.5%;'>
                                <p>Código-Postal:</p>
                                <p>".$_POST["cpEmpresa"]."</p>
                            </div>
                            <div style='width: 48.5%;'>
                                <p>Localidade:</p>
                                <p>".$_POST["localEmpresa"]."</p>
                            </div>
                        </div>

                        <p>Forma jurídica:</p>
                        <p>".$_POST["formaEmpresa"]."</p>

                        <div style='display: flex; justify-content:space-between;'>
                            <div style='width: 48.5%;'>
                                <p>CAE Principal:</p>
                                <p>".$_POST["caeEmpresa"]."</p> 
                            </div>
                            <div style='width: 48.5%;'>
                                <p>CAE's Secundários:</p>
                                <p>".$_POST["cae2Empresa"]."</p>
                            </div>
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

        if (array_key_exists('uploaded_cv', $_FILES)) {
            $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['uploaded_cv']['name']));

            if (move_uploaded_file($_FILES['uploaded_cv']['tmp_name'], $uploadfile)) {
                $mail->addAttachment($uploadfile, $_FILES['uploaded_cv']['name']);
                $mail->Host = 'v21.pt';
                $mail->SMTPAuth = false;
                $mail->Port = 8080;
                $mail->CharSet = 'utf-8';
                $mail->setFrom($_POST["emailPromotor"], $_POST['nomeCandidato']);
                $mail->addAddress('geral@v21.pt', 'V21 - Centro de Incubação Tecnológico de Viseu');
                // $mail->addAddress('silviabaptista18@gmail.com', 'V21 - Centro de Incubação Tecnológico de Viseu');
                $mail->isHTML(true);
            
                $mail->Subject = $subject;
                $mail->Body    = $message;

                if(!$mail->send()) {
                    $erro = 'Não foi possível enviar o seu pedido de inscrição, por favor tente novamente mais tarde.';
                    echo "false||" . $erro;
                }else{
                    $subject = "Comprovativo de Inscrição para " . $_POST['form'] . ' | V21';

                    $message = "
                        <html>
                        <head>
                        </head>
                        <body>
                            <p>Olá, ".$_POST['nomeCandidato']."</p>
                            <p>Serve o presente e-mail como comprovativo de inscrição para ". $_POST['form'] .".
                            <br><br>
                            <h4>CANDIDATO/A</h4>
                            <p>Nome:</p>
                            <p>".$_POST["nomeCandidato"]."</p>
                            <br>
                            <h4>PROMOTORES</h4>
                            <p>Nome do Promotor Líder:</p>
                            <p>".$_POST["nomePromotor"]."</p>
                            <br>
                            <p>Morada:</p>
                            <p>".$_POST["moradaPromotor"]."</p>

                            <div style='display: flex; justify-content:space-between;'>
                                <div style='width: 48.5%;'>
                                    <p>Código-Postal:</p>
                                    <p>".$_POST["cpPromotor"]."</p>
                                </div>
                                <div style='width: 48.5%;'>
                                    <p>Localidade:</p>
                                    <p>".$_POST["localPromotor"]."</p>
                                </div>
                            </div>

                            <div style='display: flex; justify-content:space-between;'>
                                <div style='width: 48.5%;'>
                                    <p>Cartão Cidadão Nº.:</p>
                                    <p>".$_POST["ccPromotor"]."</p>
                                </div>
                                <div style='width: 48.5%;'>
                                    <p>NIF:</p>
                                    <p>".$_POST["nifPromotor"]."</p>
                                </div>
                            </div>

                            <p>Data de nascimento:</p>
                            <p>".$_POST["dnPromotor"]."</p>
                            <br>
                            <p>Habilitações académicasr:</p>
                            <p>".$_POST["habsPromotor"]."</p>
                            <br>
                            <p>Situação profissional:</p>
                            <p>".$_POST["profPromotor"]."</p>                

                            <div style='display: flex; justify-content:space-between;'>
                                <div style='width: 48.5%;'>
                                    <p>Contacto:</p>
                                    <p>".$_POST["contactoPromotor"]."</p>
                                </div>
                                <div style='width: 48.5%;'>
                                    <p>2º contacto:</p>
                                    <p>".$_POST["contacto2Promotor"]."</p>
                                </div>
                            </div>

                            <p>E-mail:</p>
                            <p>".$_POST["emailPromotor"]."</p>
                            <br>";
                    
                            if($_POST["nomeEmpresa"] != '') {
                                $message .= "       
                                    <h4>EMPRESA (CASO JÁ EXISTA)</h4>
                                    <p>Nome/Denominação Social:</p>
                                    <p>".$_POST["nomeEmpresa"]."</p>

                                    <div style='display: flex; justify-content:space-between;'>
                                        <div style='width: 48.5%;'>
                                            <p>NIF:</p>
                                            <p>".$_POST["nifEmpresa"]."</p>
                                        </div>
                                        <div style='width: 48.5%;'>
                                            <p>Data de constituição:</p>
                                            <p>".$_POST["dataConst"]."</p>
                                        </div>
                                    </div>
                                    
                                    <p>Morada/Sede:</p>
                                    <p>".$_POST["moradaEmpresa"]."</p>

                                    <div style='display: flex; justify-content:space-between;'>
                                        <div style='width: 48.5%;'>
                                            <p>Código-Postal:</p>
                                            <p>".$_POST["cpEmpresa"]."</p>
                                        </div>
                                        <div style='width: 48.5%;'>
                                            <p>Localidade:</p>
                                            <p>".$_POST["localEmpresa"]."</p>
                                        </div>
                                    </div>

                                    <p>Forma jurídica:</p>
                                    <p>".$_POST["formaEmpresa"]."</p>

                                    <div style='display: flex; justify-content:space-between;'>
                                        <div style='width: 48.5%;'>
                                            <p>CAE Principal:</p>
                                            <p>".$_POST["caeEmpresa"]."</p> 
                                        </div>
                                        <div style='width: 48.5%;'>
                                            <p>CAE's Secundários:</p>
                                            <p>".$_POST["cae2Empresa"]."</p>
                                        </div>
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

                    $mail->addAttachment($uploadfile, $_FILES['uploaded_cv']['name']);
                    $mail->Host = 'v21.pt';
                    $mail->SMTPAuth = false;
                    $mail->Port = 8080;
                    $mail->CharSet = 'utf-8';
                    $mail->setFrom('no-reply@v21.pt');
                    $mail->addAddress($_POST["emailPromotor"], $_POST['nomeCandidato']);
                    $mail->isHTML(true);
                
                    $mail->Subject = $subject;
                    $mail->Body    = $message;

                    $host = "www.v21.pt";
                    $user = "admin_db";
                    $password = "Zmw148u*";
                    $dbname = "v21";

                    $conn = new mysqli($host, $user, $password, $dbname);

                    $conn->set_charset("utf-8");
                    $conn->query("SET NAMES 'utf8'");

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $email_query = "SELECT * 
                    from v21.inscricoes_submissoes
                    where email_promotor = '" . $_POST["emailPromotor"] . "'
                    and programa_id = " . $_POST['id'] . "
                    OR email_empresa = '" . $_POST["emailEmpresa"] . "'
                    and programa_id = " . $_POST['id'];

                    $result_s = mysqli_query($conn, $email_query);
                    $email = array();
                        
                    while ($row_email = mysqli_fetch_assoc($result_s)) {
                        $email[] = $row_email;
                    }

                    if(empty($email)) {
                        $sql_insert = "INSERT INTO v21.inscricoes_submissoes 
                        (email_promotor,
                        email_empresa,
                        programa_id) 
                        VALUES
                        ('" . $_POST["emailPromotor"] . "',
                        '" . $_POST["emailEmpresa"] . "',
                        " . $_POST["id"] . ");";
            
                        include_once($_SERVER['DOCUMENT_ROOT'].'/connection/class.connection.php');
                        $db = Database::getInstance();
                        $connection = $db->getConnection();
                        if ($result = $connection->query($sql_insert)) {
                            $db->commitAndClose();
                            
                            $erro = 'Pedido de inscrição enviado com sucesso.';
                            echo "true||" . $erro;
                        } else {                            
                            $erro = 'Erro na submissão dos dados.';
                            echo "false||" . $erro;
                        }
                    } else {
                        $erro = 'O e-mail fornecido já se encontra inscrito para este programa.';
                        echo "false||" . $erro;
                    }
                }
            } else {
                $erro = 'O ficheiro não foi anexado. Por favor, tentar novamente.';
                echo "false||" . $erro;
            }
            
        } else {
            $erro = 'O ficheiro não foi anexado. Por favor, tentar novamente.';
            echo "false||" . $erro;
        }
	}
}else{
	$erro = 'Informação perdida durante o processo, por favor tente novamente.';
    echo "false||" . $erro;
}

echo json_encode($response);
exit;
