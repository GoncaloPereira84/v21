<?php
$host = "www.anacarolinapereira.pt";
$user = "admin_db";
$password = "Zmw148u*";
$dbname = "v21";

$conn = new mysqli($host, $user, $password, $dbname);

$conn->set_charset("utf-8");
$conn->query("SET NAMES 'utf8'");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$response = array();

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
		$response["result"] = "O e-mail fornecido contém uma tentativa de abuso de sistema.";
	}else{
        $email_query = "SELECT * 
        from email_news_subscriptions
        where email = '" . $_POST["email"] . "'
        and noticias_categoria_id = " . $_POST["categoria_id"];

        $result_s = mysqli_query($conn, $email_query);
        $email = array();
            
        while ($row_email = mysqli_fetch_assoc($result_s)) {
            $email[] = $row_email;
        }

        if($email == '') {
            $sql_insert = "INSERT INTO email_news_subscriptions 
            (email,
            noticias_categoria_id) 
            VALUES
            ('" . $_POST["email"] . "',
            " . $_POST["categoria_id"] . ");";

            include_once($_SERVER['DOCUMENT_ROOT'].'/connection/class.connection.php');
            $db = Database::getInstance();
            $connection = $db->getConnection();
            if ($result = $connection->query($sql_insert)) {
                $db->commitAndClose();
                // echo "true||" . json_encode($result);
                $response["result"] = 'E-mail subscrito com sucesso!';
            } else {
                // $db->rollbackAndClose();
                // echo "false||Erro na inserção dos dados.";
                $response["result"] = 'Erro na submissão dos dados.';
            }
        } else {
      		$response["result"] = 'O e-mail fornecido já se encontra na lista para esta categoria de notícias.';
        }
	}
}else{
	$response["result"] = 'Informação perdida durante o processo, por favor tente novamente.';
}

echo json_encode($response);
exit;
?>