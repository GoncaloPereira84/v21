<?php
include "config/start.php";

$pathinfo = getPathInfo();

if (isset($pathinfo[0])) $area = $pathinfo[0];
else $area = 'home';

if(isset($pathinfo[1])) define('IMG_PATH', '../../img');
else define('IMG_PATH', '/img');
?>

<!DOCTYPE HTML>

<head>
    <meta charset="utf-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    //HOME
    echo '<link rel="shortcut icon" type="image/png" href="favicon.png" />';
    echo '<title>V21 - Brevemente</title>
    <meta name="description" content="Brevemente." />
    <meta property="og:description" content="Brevemente." />
    <meta property="og:url" content="https://www.v21.pt" />
    <meta property="og:title" content="V21 - Brevemente" />
    <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="/css/dist/main.css">
</head>

<body>