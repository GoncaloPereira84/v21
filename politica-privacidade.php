<?php
$area = "politica-privacidade";
include "include/header.php";
?>

<div id="banner">
    <img src="<?php echo IMG_PATH ?>/banner.jpg" alt="Imagem banner Sobre Nós">
    <div class="overlay"></div>
    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" width="519" height="325.484" viewBox="0 0 519 325.5">
            <defs>
                <style>
                    .cls-1,
                    .cls-2 {
                        fill:none;
                        stroke:rgba(255,255,255,1);
                        stroke-linecap:round;
                        stroke-miterlimit:10;
                        stroke-width:9px;
                    }
                    .cls-1 {
                        stroke-dasharray:15 27;
                    }
                </style>
            </defs>
            <polyline class="cls-1 path-lines" points="4.3 4.3 134.5 139.2 152 157.4 163.8 169.6 181.2 187.6 193.8 200.8 211.3 218.9 214.2 221.9 214.2 234.9 214.3 260.4 214.3 277 214.4 302.8 214.4 319.9"/>
            <polyline class="cls-1 path-lines" points="307.9 249.9 329.4 250.2 356.2 250.7 371.9 251 399.8 251.4 414.5 251.7 440.7 252.1 445.4 252.2 454.6 261.4 472 278.7 484.6 291.3 502.4 309.2 514.9 321.6"/>
            <polyline class="cls-1 path-lines" points="58 245.6 74 245.9 100.9 246.4 116.6 246.6 144.1 247.1 157.9 247.3 186 247.8 202 248.1 228.6 248.5 251.4 248.9"/>
            <circle class="cls-2" cx="279.6" cy="250.1" r="28.3"/>
        </svg>
        <h1><?php echo translateTo('Política de Privacidade'); ?></h1>
    </div>
</div>

<div class="content-wrapper">
    <div class="area">
        <div id="politica-privacidade">
            <div class="topics">
                <?php
                    $pp_query = "SELECT * FROM politica_privacidade_itens";
            
                    $result_pp = mysqli_query($conn, $pp_query);
                    $pp = array();
            
                    while ($row_pp = mysqli_fetch_assoc($result_pp)) {
                        $pp[] = $row_pp;
                    }
            
                    foreach ($pp as $p) {
                ?>
                <div class="topic">
                    <div class="title">
                        <?php 
                            if($_SESSION['language_id'] == 1){
                                echo $p['title'];
                            } else {
                                if($p['title_en'] == ''){
                                    echo $p['title'];
                                } else {
                                    echo $p['title_en'];
                                }
                            }
                        ?>
                    </div>
                    <div class="content">
                        <?php 
                            if($_SESSION['language_id'] == 1){
                                echo $p['text'];
                            } else {
                                if($p['text_en'] == ''){
                                    echo $p['text'];
                                } else {
                                    echo $p['text_en'];
                                }
                            }
                        ?>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>