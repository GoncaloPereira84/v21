<?php
$area = "programas-projectos";
include "include/header.php";
?>

<div id="banner">
    <img class="lazyload" src="<?php echo IMG_PATH ?>/banner.jpg" alt="Imagem banner Sobre Nós">
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
        <h1><?php echo translateTo('Programas | Projetos'); ?></h1>
    </div>
</div>

<div class="content-wrapper">
    <div class="area">
        <div class="moving-forward">
            <a id="moving-forward" class="anchor"></a>

            <svg xmlns="http://www.w3.org/2000/svg" width="590.43" height="912.917" viewBox="0 0 590.43 912.917">
                <path id="Caminho_3765" data-name="Caminho 3765" d="M2676.169,2857.949s316.154,28.446,562.567-337.083c1.55-1.422,150.328-230.411-255.712-341.35,3.1,0-270.047-60.447-299.493-233.967C2685.081,1944.127,2676.169,2857.949,2676.169,2857.949Z" transform="translate(-2676.169 -1945.548)" fill="#f4f5fa" />
            </svg>

            <?php
                $moving_forward_query = "SELECT * FROM pp_moving_forward";

                $result_moving_forward = mysqli_query($conn, $moving_forward_query);
                $moving_forward = array();

                while ($row_moving_forward = mysqli_fetch_assoc($result_moving_forward)) {
                    $moving_forward[] = $row_moving_forward;
                }

                foreach ($moving_forward as $mf) {
            ?>

            <div class="left">
                <h2>
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $mf['title'];
                        } else {
                            if($mf['title_en'] == ''){
                                echo $mf['title'];
                            } else {
                                echo $mf['title_en'];
                            }
                        }
                    ?>
                </h2>
                <div class="line"></div>
                <div class="text">
                    <div>
                        <?php 
                            if($_SESSION['language_id'] == 1){
                                echo $mf['text'];
                            } else {
                                if($mf['text_en'] == ''){
                                    echo $mf['text'];
                                } else {
                                    echo $mf['text_en'];
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="ctas">
                    <a href="<?php echo $mf['link']; ?>">
                        <div class="cta-cont round">
                            <div class="cta">
                                <div class="txt">+</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="right">
                <div class="img">
                    <img class="<?php echo $mf['img_align']; ?>" src="<?php echo $mf['img_src']; ?>" alt="Imagem <?php echo $mf['title']; ?>">
                    <!-- <div class="filter"></div> -->
                </div>
            </div>

            <?php 
                } 
            ?>

            <div id="scroll-down" onClick="toHash('.programas-intro')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 55" style="width: 55px; height: 55px;">
                    <circle id="circle" fill="none" stroke="#009aa7" stroke-width="5px" cx="27.5" cy="27.5" r="24.5" />
                    <path id="arrow-dark" fill="none" stroke="#3A364E" stroke-width="5px" stroke-linecap="round" stroke-linejoin="round" d="M18.89,22.56l9,10.47,9-10.47" />
                    <path id="arrow-blue" fill="none" stroke="#009aa7" stroke-width="5px" stroke-linecap="round" stroke-linejoin="round" d="M18.89,22.56l9,10.47,9-10.47" />
                </svg>
            </div>
        </div>

        <div class="programas-intro">
            <a id="startup-school" class="anchor"></a>
            <svg id="dots" xmlns="http://www.w3.org/2000/svg" width="336.142" height="336.142" viewBox="0 0 336.142 336.142">
                <g id="Grupo_1474" data-name="Grupo 1474" opacity="0.46">
                    <g id="Grupo_1094" data-name="Grupo 1094" transform="translate(0)">
                        <circle id="Elipse_67" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1095" data-name="Grupo 1095" transform="translate(0 33.297)">
                        <circle id="Elipse_67-2" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-2" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-2" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-2" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-2" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-2" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-2" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-2" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-2" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-2" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-2" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-2" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-2" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1096" data-name="Grupo 1096" transform="translate(0 65.801)">
                        <circle id="Elipse_67-3" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-3" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-3" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-3" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-3" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-3" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-3" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-3" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-3" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-3" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-3" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-3" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-3" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1097" data-name="Grupo 1097" transform="translate(0 99.099)">
                        <circle id="Elipse_67-4" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-4" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-4" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-4" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-4" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-4" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-4" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-4" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-4" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-4" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-4" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-4" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-4" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1098" data-name="Grupo 1098" transform="translate(0 131.603)">
                        <circle id="Elipse_67-5" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-5" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-5" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-5" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-5" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-5" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-5" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-5" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-5" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-5" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-5" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-5" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-5" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1099" data-name="Grupo 1099" transform="translate(0 164.9)">
                        <circle id="Elipse_67-6" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" transform="translate(0 0)" fill="#b6b8bd" />
                        <circle id="Elipse_68-6" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748 0)" fill="#b6b8bd" />
                        <circle id="Elipse_69-6" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702 0)" fill="#b6b8bd" />
                        <circle id="Elipse_70-6" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45 0)" fill="#b6b8bd" />
                        <circle id="Elipse_71-6" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405 0)" fill="#b6b8bd" />
                        <circle id="Elipse_72-6" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152 0)" fill="#b6b8bd" />
                        <circle id="Elipse_73-6" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9 0)" fill="#b6b8bd" />
                        <circle id="Elipse_74-6" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855 0)" fill="#b6b8bd" />
                        <circle id="Elipse_75-6" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603 0)" fill="#b6b8bd" />
                        <circle id="Elipse_76-6" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557 0)" fill="#b6b8bd" />
                        <circle id="Elipse_77-6" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305 0)" fill="#b6b8bd" />
                        <circle id="Elipse_78-6" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26 0)" fill="#b6b8bd" />
                        <circle id="Elipse_79-6" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007 0)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1100" data-name="Grupo 1100" transform="translate(0 197.404)">
                        <circle id="Elipse_67-7" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-7" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-7" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-7" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-7" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-7" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-7" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-7" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-7" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-7" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-7" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-7" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-7" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1101" data-name="Grupo 1101" transform="translate(0 230.702)">
                        <circle id="Elipse_67-8" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" transform="translate(0 0)" fill="#b6b8bd" />
                        <circle id="Elipse_68-8" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748 0)" fill="#b6b8bd" />
                        <circle id="Elipse_69-8" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702 0)" fill="#b6b8bd" />
                        <circle id="Elipse_70-8" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45 0)" fill="#b6b8bd" />
                        <circle id="Elipse_71-8" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405 0)" fill="#b6b8bd" />
                        <circle id="Elipse_72-8" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152 0)" fill="#b6b8bd" />
                        <circle id="Elipse_73-8" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9 0)" fill="#b6b8bd" />
                        <circle id="Elipse_74-8" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855 0)" fill="#b6b8bd" />
                        <circle id="Elipse_75-8" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603 0)" fill="#b6b8bd" />
                        <circle id="Elipse_76-8" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557 0)" fill="#b6b8bd" />
                        <circle id="Elipse_77-8" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305 0)" fill="#b6b8bd" />
                        <circle id="Elipse_78-8" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26 0)" fill="#b6b8bd" />
                        <circle id="Elipse_79-8" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007 0)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1102" data-name="Grupo 1102" transform="translate(0 263.206)">
                        <circle id="Elipse_67-9" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-9" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-9" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-9" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-9" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-9" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-9" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-9" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-9" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-9" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-9" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-9" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-9" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1103" data-name="Grupo 1103" transform="translate(0 296.503)">
                        <circle id="Elipse_67-10" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" transform="translate(0 0)" fill="#b6b8bd" />
                        <circle id="Elipse_68-10" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748 0)" fill="#b6b8bd" />
                        <circle id="Elipse_69-10" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702 0)" fill="#b6b8bd" />
                        <circle id="Elipse_70-10" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45 0)" fill="#b6b8bd" />
                        <circle id="Elipse_71-10" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405 0)" fill="#b6b8bd" />
                        <circle id="Elipse_72-10" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152 0)" fill="#b6b8bd" />
                        <circle id="Elipse_73-10" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9 0)" fill="#b6b8bd" />
                        <circle id="Elipse_74-10" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855 0)" fill="#b6b8bd" />
                        <circle id="Elipse_75-10" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603 0)" fill="#b6b8bd" />
                        <circle id="Elipse_76-10" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557 0)" fill="#b6b8bd" />
                        <circle id="Elipse_77-10" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305 0)" fill="#b6b8bd" />
                        <circle id="Elipse_78-10" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26 0)" fill="#b6b8bd" />
                        <circle id="Elipse_79-10" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007 0)" fill="#b6b8bd" />
                    </g>
                    <g id="Grupo_1104" data-name="Grupo 1104" transform="translate(0 329.007)">
                        <circle id="Elipse_67-11" data-name="Elipse 67" cx="3.568" cy="3.568" r="3.568" fill="#b6b8bd" />
                        <circle id="Elipse_68-11" data-name="Elipse 68" cx="3.568" cy="3.568" r="3.568" transform="translate(27.748)" fill="#b6b8bd" />
                        <circle id="Elipse_69-11" data-name="Elipse 69" cx="3.568" cy="3.568" r="3.568" transform="translate(54.702)" fill="#b6b8bd" />
                        <circle id="Elipse_70-11" data-name="Elipse 70" cx="3.568" cy="3.568" r="3.568" transform="translate(82.45)" fill="#b6b8bd" />
                        <circle id="Elipse_71-11" data-name="Elipse 71" cx="3.568" cy="3.568" r="3.568" transform="translate(109.405)" fill="#b6b8bd" />
                        <circle id="Elipse_72-11" data-name="Elipse 72" cx="3.568" cy="3.568" r="3.568" transform="translate(137.152)" fill="#b6b8bd" />
                        <circle id="Elipse_73-11" data-name="Elipse 73" cx="3.568" cy="3.568" r="3.568" transform="translate(164.9)" fill="#b6b8bd" />
                        <circle id="Elipse_74-11" data-name="Elipse 74" cx="3.568" cy="3.568" r="3.568" transform="translate(191.855)" fill="#b6b8bd" />
                        <circle id="Elipse_75-11" data-name="Elipse 75" cx="3.568" cy="3.568" r="3.568" transform="translate(219.603)" fill="#b6b8bd" />
                        <circle id="Elipse_76-11" data-name="Elipse 76" cx="3.568" cy="3.568" r="3.568" transform="translate(246.557)" fill="#b6b8bd" />
                        <circle id="Elipse_77-11" data-name="Elipse 77" cx="3.568" cy="3.568" r="3.568" transform="translate(274.305)" fill="#b6b8bd" />
                        <circle id="Elipse_78-11" data-name="Elipse 78" cx="3.568" cy="3.568" r="3.568" transform="translate(301.26)" fill="#b6b8bd" />
                        <circle id="Elipse_79-11" data-name="Elipse 79" cx="3.568" cy="3.568" r="3.568" transform="translate(329.007)" fill="#b6b8bd" />
                    </g>
                </g>
            </svg>

            <?php
                $startup_school_query = "SELECT * FROM pp_startup_school";

                $result_startup_school = mysqli_query($conn, $startup_school_query);
                $startup_school = array();

                while ($row_startup_school = mysqli_fetch_assoc($result_startup_school)) {
                    $startup_school[] = $row_startup_school;
                }

                foreach ($startup_school as $ss) {
            ?>
            <div class="left">
                <div class="img">
                    <img class="<?php echo $ss['img_align'] ?>" src="<?php echo $ss['img_src'] ?>" alt="Imagem <?php echo $ss['title'] ?>">
                    <div class="filter"></div>
                </div>
            </div>
            <div class="right">
                <h2>
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $ss['title'];
                        } else {
                            if($ss['title_en'] == ''){
                                echo $ss['title'];
                            } else {
                                echo $ss['title_en'];
                            }
                        }
                    ?>
                </h2>
                <div class="line"></div>
                <div class="text">
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $ss['text'];
                        } else {
                            if($ss['text_en'] == ''){
                                echo $ss['text'];
                            } else {
                                echo $ss['text_en'];
                            }
                        }
                    ?>
                </div>

                <div class="ctas">
                    <a href="<?php echo $ss['link'] ?>">
                        <div class="cta-cont round">
                            <div class="cta">
                                <div class="txt">+</div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php 
                    }
                ?>
            </div>
        </div>

        <div class="rural">
            <a id="v21-rural" class="anchor"></a>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1984" height="666.65" viewBox="0 0 1984 666.65">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#fff" />
                        <stop offset="1" stop-color="#f4f5fa" />
                    </linearGradient>
                </defs>
                <path id="Caminho_3770" data-name="Caminho 3770" d="M472.783,4546.6s587.017,174.152,988.433-40.444c-2.007,1.637,492.586-170.413,995.566-27.129-4.014,0,0-532.4,0-532.4H497.872Z" transform="translate(-472.783 -3946.626)" fill="url(#linear-gradient)" />
            </svg>

            <?php
                $v21_rural_query = "SELECT * FROM pp_v21_rural";

                $result_v21_rural = mysqli_query($conn, $v21_rural_query);
                $v21_rural = array();

                while ($row_v21_rural = mysqli_fetch_assoc($result_v21_rural)) {
                    $v21_rural[] = $row_v21_rural;
                }

                foreach ($v21_rural as $v21) {
            ?>

            <div class="top">
                <h2><?php 
                    if($_SESSION['language_id'] == 1){
                        $title1 = explode("Empreendedorismo",$v21['title'])[0];
                        $title2 = explode("Rural",$v21['title'])[1];
                        echo $title1 . '<br>' . $title2;
                    } else {
                        $title1_en = explode("Entrepreneurship",$v21['title_en'])[0];
                        $title2_en = explode("Program",$v21['title_en'])[1];
                        echo $title1_en . '<br>' . $title2_en;
                    }
                ?></h2>
                <div class="line"></div>
                <div class="intro">
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $v21['text1'];
                        } else {
                            if($v21['text1_en'] == ''){
                                echo $v21['text1'];
                            } else {
                                echo $v21['text1_en'];
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="bottom">
                <div class="left">
                    <div class="img">
                        <img class="<?php echo $v21['img_align']; ?>" src="<?php echo $v21['img_src']; ?>" alt="Imagem <?php echo $v21['title']; ?>">
                    </div>
                    <div class="text-cont">
                        <div class="text">
                            <?php 
                                if($_SESSION['language_id'] == 1){
                                    echo $v21['text3'];
                                } else {
                                    if($v21['text3_en'] == ''){
                                        echo $v21['text3'];
                                    } else {
                                        echo $v21['text3_en'];
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="text">
                        <?php 
                            if($_SESSION['language_id'] == 1){
                                echo $v21['text2'];
                            } else {
                                if($v21['text2_en'] == ''){
                                    echo $v21['text2'];
                                } else {
                                    echo $v21['text2_en'];
                                }
                            }
                        ?>
                    </div>

                    <div class="ctas">
                        <a href="<?php echo $v21['link']; ?>">
                            <div class="cta-cont round">
                                <div class="cta">
                                    <div class="txt">+</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                } 
            ?>
        </div>

        <div class="young">
            <!-- <div id="bg-galeria" class="young-l">
                <div class="close-pic">
                    <div class="icon">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div> -->
            <a id="young-leaders" class="anchor"></a>
            <div class="left">
                <?php
                    $young_leaders_query = "SELECT * FROM pp_young_leaders";

                    $result_young_leaders = mysqli_query($conn, $young_leaders_query);
                    $young_leaders = array();

                    while ($row_young_leaders = mysqli_fetch_assoc($result_young_leaders)) {
                        $young_leaders[] = $row_young_leaders;
                    }

                    foreach ($young_leaders as $yl) {
                ?>
                <h2>
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $yl['title'];
                        } else {
                            if($yl['title_en'] == ''){
                                echo $yl['title'];
                            } else {
                                echo $yl['title_en'];
                            }
                        }
                    ?>
                </h2>
                <div class="line"></div>
                <div class="intro">
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $yl['text'];
                        } else {
                            if($yl['text_en'] == ''){
                                echo $yl['text'];
                            } else {
                                echo $yl['text_en'];
                            }
                        }
                    ?>
                </div>

                <div class="ctas">
                    <a href="<?php echo $yl['link'] ?>">
                        <div class="cta-cont round">
                            <div class="cta">
                                <div class="txt">+</div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php 
                    } 
                ?>
            </div>
            <div class="right">
                <div class="gallery-cont">
                    <?php
                        $young_leaders_gallery_query = "SELECT * FROM pp_young_leaders_galeria";

                        $result_young_leaders_gallery = mysqli_query($conn, $young_leaders_gallery_query);
                        $young_leaders_gallery = array();

                        while ($row_young_leaders_gallery = mysqli_fetch_assoc($result_young_leaders_gallery)) {
                            $young_leaders_gallery[] = $row_young_leaders_gallery;
                        }

                        foreach ($young_leaders_gallery as $ylg) {
                    ?>
                    <div class="pic pic<?php echo $ylg['id'] ?>">
                        <img class="<?php echo $ylg['img_align'] ?>" src="<?php echo $ylg['img_src'] ?>" alt="Imagem <?php echo $ylg['title'] ?>">
                        <img class="zoomed" src="<?php echo $ylg['img_src'] ?>" alt="Imagem <?php echo $ylg['title'] ?>">
                    </div>
                    <?php } ?>
                </div>

                <div class="gallery-cont-mobile">
                    <?php
                        $young_leaders_gallery_query = "SELECT * FROM pp_young_leaders_galeria";

                        $result_young_leaders_gallery = mysqli_query($conn, $young_leaders_gallery_query);
                        $young_leaders_gallery = array();

                        while ($row_young_leaders_gallery = mysqli_fetch_assoc($result_young_leaders_gallery)) {
                            $young_leaders_gallery[] = $row_young_leaders_gallery;
                        }

                        foreach ($young_leaders_gallery as $ylg) {
                    ?>
                    <div class="pic">
                        <img class="<?php echo $ylg['img_align'] ?>" src="<?php echo $ylg['img_src'] ?>" alt="Imagem <?php echo $ylg['title'] ?>">
                        <img class="zoomed" src="<?php echo $ylg['img_src'] ?>" alt="Imagem <?php echo $ylg['title'] ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="testemunhos">
            <svg xmlns="http://www.w3.org/2000/svg" width="590.43" height="912.917" viewBox="0 0 590.43 912.917">
                <path id="Caminho_3765" data-name="Caminho 3765" d="M2676.169,2857.949s316.154,28.446,562.567-337.083c1.55-1.422,150.328-230.411-255.712-341.35,3.1,0-270.047-60.447-299.493-233.967C2685.081,1944.127,2676.169,2857.949,2676.169,2857.949Z" transform="translate(-2676.169 -1945.548)" fill="#f4f5fa" />
            </svg>
            <a id="testemunhos" class="anchor"></a>
            <h2><?php echo translateTo('Testemunhos'); ?></h2>
            <div class="line"></div>
            <div class="cont">
                <div class="left">
                    <div class="categories">
                        <?php
                            $testemunhos_categorias_query = "SELECT * FROM pp_testemunhos_categoria";

                            $result_testemunhos_categorias = mysqli_query($conn, $testemunhos_categorias_query);
                            $testemunhos_categorias = array();

                            while ($row_testemunhos_categorias = mysqli_fetch_assoc($result_testemunhos_categorias)) {
                                $testemunhos_categorias[] = $row_testemunhos_categorias;
                            }

                            foreach ($testemunhos_categorias as $tc) {
                        ?>
                        <div class="category <?php echo $tc['id'] == 1 ? 'active' : ''; ?>" data-category="<?php echo $tc['id'];?>" onClick="selectCategory(<?php echo $tc['id'];?>)">
                            <div class="txt">
                                <?php 
                                    if($_SESSION['language_id'] == 1){
                                        echo $tc['title'];
                                    } else {
                                        if($tc['title_en'] == ''){
                                            echo $tc['title'];
                                        } else {
                                            echo $tc['title_en'];
                                        }
                                    }
                                ?>
                            </div>
                            <div class="line-sep"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="right">
                    <?php
                        $testemunhos_categorias_query = "SELECT * FROM pp_testemunhos_categoria";

                        $result_testemunhos_categorias = mysqli_query($conn, $testemunhos_categorias_query);
                        $testemunhos_categorias = array();

                        while ($row_testemunhos_categorias = mysqli_fetch_assoc($result_testemunhos_categorias)) {
                            $testemunhos_categorias[] = $row_testemunhos_categorias;
                        }

                        foreach ($testemunhos_categorias as $tc) {
                    ?>
                    <div class="window <?php echo $tc['id'] == 1 ? 'active' : ''; ?>" data-category="<?php echo $tc['id'];?>">
                        <div class="cards">
                            <?php
                                $testemunhos_query = "SELECT * FROM pp_testemunhos t WHERE t.categoria_id = '" . $tc['id'] . "';";

                                $result_testemunhos = mysqli_query($conn, $testemunhos_query);
                                $testemunhos = array();

                                while ($row_testemunhos = mysqli_fetch_assoc($result_testemunhos)) {
                                    $testemunhos[] = $row_testemunhos;
                                }

                                $testemunho = 0;
                                foreach ($testemunhos as $t) {
                                    $testemunho++;
                            ?>
                            <div class="card <?php echo $testemunho == 1 ? 'active' : ''; ?>" data-testimonial="<?php echo $testemunho; ?>" data-category="<?php echo $t['categoria_id'];?>">
                                <?php
                                    if($t['video_src'] == '' || $t['video_src'] == 'undefined') {
                                ?>
                                <div class="text-content">
                                    <div class="title">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $tc['title'];
                                            } else {
                                                if($tc['title_en'] == ''){
                                                    echo $tc['title'];
                                                } else {
                                                    echo $tc['title_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="text">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $t['text'];
                                            } else {
                                                if($t['text_en'] == ''){
                                                    echo $t['text'];
                                                } else {
                                                    echo $t['text_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="name"><?php echo $t['autor'];?></div>
                                </div>
                                <?php } else {$code = explode('=', $t['video_src']);?>
                                <div class="video">
                                    <div class="cont">
                                        <div class="title"><?php echo $tc['title'];?></div>
                                        <div class="youtube vid" data-embed="<?php echo $code[1];?>">
                                            <div class="play-button"></div> 
                                            <!-- <iframe class="lazyload" width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $code[1];?>" frameborder="0"></iframe> -->
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="indicators">
                            <?php
                                $testemunhos_query = "SELECT * FROM pp_testemunhos t WHERE t.categoria_id = '" . $tc['id'] . "';";

                                $result_testemunhos = mysqli_query($conn, $testemunhos_query);
                                $testemunhos = array();

                                while ($row_testemunhos = mysqli_fetch_assoc($result_testemunhos)) {
                                    $testemunhos[] = $row_testemunhos;
                                }

                                $testemunho = 0;
                                foreach ($testemunhos as $t) {
                                    $testemunho++;
                            ?>
                            <div class="ind <?php echo $testemunho == 1 ? 'active' : ''; ?>" data-testimonial="<?php echo $testemunho; ?>" data-category="<?php echo $t['categoria_id'];?>" onClick="currentSlide(<?php echo $t['categoria_id'];?>, <?php echo $testemunho;?>)"></div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="testemunhos-mobile">
            <svg xmlns="http://www.w3.org/2000/svg" width="590.43" height="912.917" viewBox="0 0 590.43 912.917">
                <path id="Caminho_3765" data-name="Caminho 3765" d="M2676.169,2857.949s316.154,28.446,562.567-337.083c1.55-1.422,150.328-230.411-255.712-341.35,3.1,0-270.047-60.447-299.493-233.967C2685.081,1944.127,2676.169,2857.949,2676.169,2857.949Z" transform="translate(-2676.169 -1945.548)" fill="#f4f5fa" />
            </svg>
            <a id="testemunhos" class="anchor"></a>
            <h2><?php echo translateTo('Testemunhos'); ?></h2>
            <div class="line"></div>
            <div class="cont">
                <div class="left">
                    <div class="categories">
                        <?php
                            $testemunhos_categorias_query = "SELECT * FROM pp_testemunhos_categoria";

                            $result_testemunhos_categorias = mysqli_query($conn, $testemunhos_categorias_query);
                            $testemunhos_categorias = array();

                            while ($row_testemunhos_categorias = mysqli_fetch_assoc($result_testemunhos_categorias)) {
                                $testemunhos_categorias[] = $row_testemunhos_categorias;
                            }

                            foreach ($testemunhos_categorias as $tc) {
                        ?>
                        <div class="category <?php echo $tc['id'] == 1 ? 'active' : ''; ?>" data-category="<?php echo $tc['id'];?>" onClick="selectCategoryMob(<?php echo $tc['id'];?>)">
                            <div class="txt">
                                <?php 
                                    if($_SESSION['language_id'] == 1){
                                        echo $tc['title'];
                                    } else {
                                        if($tc['title_en'] == ''){
                                            echo $tc['title'];
                                        } else {
                                            echo $tc['title_en'];
                                        }
                                    }
                                ?>
                            </div>
                            <div class="line-sep"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="line-sep-section"></div>
                <div class="right">
                <?php
                        $testemunhos_categorias_query = "SELECT * FROM pp_testemunhos_categoria";

                        $result_testemunhos_categorias = mysqli_query($conn, $testemunhos_categorias_query);
                        $testemunhos_categorias = array();

                        while ($row_testemunhos_categorias = mysqli_fetch_assoc($result_testemunhos_categorias)) {
                            $testemunhos_categorias[] = $row_testemunhos_categorias;
                        }

                        foreach ($testemunhos_categorias as $tc) {
                    ?>
                    <div class="window <?php echo $tc['id'] == 1 ? 'active' : ''; ?>" data-category="<?php echo $tc['id'];?>">
                        <div class="cards">
                            <?php
                                $testemunhos_query = "SELECT * FROM pp_testemunhos t WHERE t.categoria_id = '" . $tc['id'] . "';";

                                $result_testemunhos = mysqli_query($conn, $testemunhos_query);
                                $testemunhos = array();

                                while ($row_testemunhos = mysqli_fetch_assoc($result_testemunhos)) {
                                    $testemunhos[] = $row_testemunhos;
                                }

                                $testemunho = 0;
                                foreach ($testemunhos as $t) {
                                    $testemunho++;
                            ?>
                            <div class="card <?php echo $testemunho == 1 ? 'active' : ''; ?>" data-testimonial="<?php echo $testemunho; ?>" data-category="<?php echo $t['categoria_id'];?>">
                                <?php
                                    if($t['video_src'] == '' || $t['video_src'] == 'undefined') {
                                ?>
                                <div class="text-content">
                                    <div class="title">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $tc['title'];
                                            } else {
                                                if($tc['title_en'] == ''){
                                                    echo $tc['title'];
                                                } else {
                                                    echo $tc['title_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="text">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $t['text'];
                                            } else {
                                                if($t['text_en'] == ''){
                                                    echo $t['text'];
                                                } else {
                                                    echo $t['text_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="name"><?php echo $t['autor'];?></div>
                                </div>
                                <?php } else {?>
                                <div class="video">
                                    <div class="cont">
                                        <div class="title"><?php echo $tc['title'];?></div>
                                        <div class="vid">
                                            <?php
                                                $code = explode('=', $t['video_src']);
                                            ?>
                                            <iframe class="lazyload" width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $code[1];?>" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="indicators">
                            <?php
                                $testemunhos_query = "SELECT * FROM pp_testemunhos t WHERE t.categoria_id = '" . $tc['id'] . "';";

                                $result_testemunhos = mysqli_query($conn, $testemunhos_query);
                                $testemunhos = array();

                                while ($row_testemunhos = mysqli_fetch_assoc($result_testemunhos)) {
                                    $testemunhos[] = $row_testemunhos;
                                }

                                $testemunho = 0;
                                foreach ($testemunhos as $t) {
                                    $testemunho++;
                            ?>
                            <div class="ind <?php echo $testemunho == 1 ? 'active' : ''; ?>" data-testimonial="<?php echo $testemunho; ?>" data-category="<?php echo $t['categoria_id'];?>" onClick="currentSlideMob(<?php echo $t['categoria_id'];?>, <?php echo $testemunho;?>)"></div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="galeria">
            <a id="galeria-programas-projetos" class="anchor"></a>
            <?php include "include/galeria.php";?>
        </div>
    </div>
</div>


<?php
include "include/footer.php";
?>