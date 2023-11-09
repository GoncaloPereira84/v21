<?php
include $_SERVER['DOCUMENT_ROOT']."/tools/tools.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('memory_limit','300M');

$page = basename($_SERVER["PHP_SELF"], ".php");

date_default_timezone_set("Europe/Lisbon");
setlocale(LC_TIME, 'pt_PT.utf8');

$host = "www.anacarolinapereira.pt";
$user = "admin_db";
$password = "Zmw148u*";
$dbname = "v21";

// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "v21";

$conn = new mysqli($host, $user, $password, $dbname);

$conn->set_charset("utf-8");
$conn->query("SET NAMES 'utf8'");

if(!isset($_SESSION))session_start();
if(!isset($_SESSION["language_id"])) $_SESSION["language_id"] = 1;
if($_SESSION["language_id"] == 1) setlocale(LC_TIME, 'pt_PT.utf8');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    

//continuar aqui
function translateTo($word) {
    global $conn;
    $conn->set_charset("utf-8");

    // if($table != 'transcriptions') {
    //     $translation_sql = "SELECT $column FROM $table WHERE $column = '".$word."' AND country_id=" . $_SESSION["language_id"];
    //     print_r($translation_sql);

    //     $result = mysqli_query($conn, $translation_sql);
    //     $translation = array();

    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $translation[] = $row;
    //     }

    //     foreach ($translation as $t) {
    //         return $t[$column];
    //     }
    // } else {
        $translation_sql = "SELECT transcriptions_to FROM transcriptions WHERE transcriptions_from='" . $word . "' AND country_id=" . $_SESSION["language_id"];

        $result = mysqli_query($conn, $translation_sql);
        $translation = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $translation[] = $row;
        }

        foreach ($translation as $t) {
            return $t['transcriptions_to'] ? $t['transcriptions_to'] : $word;
        }
    // }

}

define('DB_HOST', $host);
define('DB_NAME', $dbname);
define('DB_USER', $user);
define('DB_PASS', $dbname);
?>