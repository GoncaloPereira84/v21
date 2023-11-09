<?php
include "include/header.php";

if ($area == 'noticias') {
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
                            fill: none;
                            stroke: rgba(255, 255, 255, 1);
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 9px;
                        }

                        .cls-1 {
                            stroke-dasharray: 15 27;
                        }
                    </style>
                </defs>
                <polyline class="cls-1 path-lines" points="4.3 4.3 134.5 139.2 152 157.4 163.8 169.6 181.2 187.6 193.8 200.8 211.3 218.9 214.2 221.9 214.2 234.9 214.3 260.4 214.3 277 214.4 302.8 214.4 319.9" />
                <polyline class="cls-1 path-lines" points="307.9 249.9 329.4 250.2 356.2 250.7 371.9 251 399.8 251.4 414.5 251.7 440.7 252.1 445.4 252.2 454.6 261.4 472 278.7 484.6 291.3 502.4 309.2 514.9 321.6" />
                <polyline class="cls-1 path-lines" points="58 245.6 74 245.9 100.9 246.4 116.6 246.6 144.1 247.1 157.9 247.3 186 247.8 202 248.1 228.6 248.5 251.4 248.9" />
                <circle class="cls-2" cx="279.6" cy="250.1" r="28.3" />
            </svg>
            <h1><?php echo translateTo('Notícias'); ?></h1>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="area">
            <div class="atualidade">
                <a id="atualidade" class="anchor"></a>
                <h2><?php echo translateTo('Atualidade'); ?></h2>
                <div class="line"></div>
                <div class="cont">
                    <div class="top">
                        <div class="cards">
                            <?php
                                $noticias_query = "SELECT n.*, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en 
                                FROM noticias n 
                                INNER JOIN noticias_categorias nc 
                                ON nc.id = n.categoria_id 
                                WHERE n.is_visible = 1
                                ORDER BY n.data_inicio DESC LIMIT 3";

                                $result_noticias = mysqli_query($conn, $noticias_query);
                                $noticias = array();

                                while ($row_noticias = mysqli_fetch_assoc($result_noticias)) {
                                    $noticias[] = $row_noticias;
                                }

                                foreach ($noticias as $n) {
                            ?>
                            <a href="https://www.v21.pt/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                <div class="card">
                                    <div class="img">
                                        <img class="<?php echo $n['img_align'];?>" src="<?php echo $n['img_src'];?>" alt="<?php echo $n['title'];?>" style="height: 100%; width: auto;">
                                        <div class="filter"></div>
                                    </div>
                                    <div class="info">
                                        <div class="details">
                                            <div class="cat">
                                                <div class="cat-cont">
                                                    <div class="txt">
                                                        <?php 
                                                            if($_SESSION['language_id'] == 1){
                                                                echo $n['categoria_title'];
                                                            } else {
                                                                if($n['categoria_title_en'] == ''){
                                                                    echo $n['categoria_title'];
                                                                } else {
                                                                    echo $n['categoria_title_en'];
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                                        <path id="ic_date_range_24px" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" />
                                                    </svg>
                                                </div>
                                                <div class="txt">
                                                    <?php
                                                        $dia = explode('-', $n['data_inicio'])[2];
                                                        $mes = explode('-', $n['data_inicio'])[1];
                                                        $ano = explode('-', $n['data_inicio'])[0];

                                                        echo $dia . '.' . $mes . '.' . $ano;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <?php 
                                                if($_SESSION['language_id'] == 1){
                                                    echo $n['title'];
                                                } else {
                                                    if($n['title_en'] == ''){
                                                        echo $n['title'];
                                                    } else {
                                                        echo $n['title_en'];
                                                    }
                                                }
                                            ?>
                                        </div>

                                        <div class="line"></div>

                                        <div class="text">
                                            <?php 
                                                //$str = $_SESSION['language_id'] == 1 ? $n['text'] : $n['text_en'];
   
                                                if($_SESSION['language_id'] == 1){
                                                    $str = $n['text'];
                                                } else {
                                                    if($n['text_en'] == ''){
                                                        $str = $n['text'];
                                                    } else {
                                                        $str = $n['text_en'];
                                                    }
                                                }

                                                $no_tags = strip_tags($str);
                                                echo substr($no_tags, 0, 150).'(…)';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="cta-cont">
                            <a href="/noticias/atualidade">
                                <div class="cta">
                                    <div class="txt"><?php echo translateTo('Ver todas as notícias'); ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <a id="inscricoes-a" class="anchor"></a>
            <div class="inscricoes">

                <img src="<?php echo IMG_PATH ?>/inscricoes-section.jpg" alt="">
                <div class="filter"></div>
                <div class="cont">
                    <div class="text">Terminam brevemente as inscrições para o Plano de Negócios. Uma iniciativa com a duração de 3 meses, que lhe vai
                        permitir adquirir todas as ferramentas para a elaboração do plano de negócios daquela ideia de negócio em que prometeu
                        que iria apostar este ano! Aqui terá uma equipa de especialistas focada em apoiá-lo diariamente. </div>
                    <div class="title">Inscrições no Plano de Negócios prestes a terminar. </div>
                    <div class="cta-cont">
                        <a href="/inscricoes">
                            <div class="cta">
                                <div class="txt">Quero inscrever-me!</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->

            <div class="noticias">
                <a id="v21-rural" class="anchor"></a>
                <?php
                    if($_SESSION['language_id'] == 1){
                        $title1 = explode("-",'Programa V21 Rural-Empreendedorismo e Negócios em Meio Rural')[0];
                        $title2 = explode("-",'Programa V21 Rural-Empreendedorismo e Negócios em Meio Rural')[1];
                    } else {
                        $title1 = explode("-",'V21 Rural Program-Entrepreneurship and Business in Rural Areas')[0];
                        $title2 = explode("-",'V21 Rural Program-Entrepreneurship and Business in Rural Areas')[1];
                    }
                ?>
                <h2><?php echo $title1 ?><span>-<?php echo $title2 ?></span>
                </h2>
                <div class="line"></div>
                <div class="cont">
                    <div class="top">
                        <div class="cards">
                            <?php
                                $noticias_v21_rural_query = "SELECT n.*, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en 
                                FROM noticias n 
                                INNER JOIN noticias_categorias nc 
                                ON nc.id = n.categoria_id 
                                WHERE nc.title = 'V21 Rural' 
                                AND n.is_visible = 1
                                ORDER BY n.data_fim DESC LIMIT 3";

                                $result_noticias_v21_rural = mysqli_query($conn, $noticias_v21_rural_query);
                                $noticias_v21_rural = array();

                                while ($row_noticias_v21_rural = mysqli_fetch_assoc($result_noticias_v21_rural)) {
                                    $noticias_v21_rural[] = $row_noticias_v21_rural;
                                }

                                foreach ($noticias_v21_rural as $n) {
                            ?>

                            <a href="/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                <div class="card">
                                    <div class="img">
                                        <img class="<?php echo $n['img_align'];?>" src="<?php echo $n['img_src'];?>" alt="<?php echo $n['title'];?>">
                                        <div class="filter"></div>
                                    </div>
                                    <div class="info">
                                        <div class="details">
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                                        <path id="ic_date_range_24px" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" />
                                                    </svg>
                                                </div>
                                                <div class="txt">
                                                    <?php
                                                        $dia = explode('-', $n['data_inicio'])[2];
                                                        $mes = explode('-', $n['data_inicio'])[1];
                                                        $ano = explode('-', $n['data_inicio'])[0];

                                                        echo $dia . '.' . $mes . '.' . $ano;
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="name">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                        <path id="ic_perm_identity_24px" d="M12,5.9A2.1,2.1,0,1,1,9.9,8,2.1,2.1,0,0,1,12,5.9m0,9c2.97,0,6.1,1.46,6.1,2.1v1.1H5.9V17c0-.64,3.13-2.1,6.1-2.1M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,9c-2.67,0-8,1.34-8,4v3H20V17C20,14.34,14.67,13,12,13Z" transform="translate(-4 -4)" />
                                                    </svg>
                                                </div>
                                                <div class="txt">
                                                    <?php 
                                                        if($_SESSION['language_id'] == 1){
                                                            echo $n['categoria_title'];
                                                        } else {
                                                            if($n['categoria_title_en'] == ''){
                                                                echo $n['categoria_title'];
                                                            } else {
                                                                echo $n['categoria_title_en'];
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="title">
                                                <div class="txt">
                                                    <?php 
                                                        if($_SESSION['language_id'] == 1){
                                                            echo $n['title'];
                                                        } else {
                                                            if($n['title_en'] == ''){
                                                                echo $n['title'];
                                                            } else {
                                                                echo $n['title_en'];
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text">
                                            <?php 
                                                //$str = $_SESSION['language_id'] == 1 ? $n['text'] : $n['text_en'];
                                                if($_SESSION['language_id'] == 1){
                                                    $str = $n['text'];
                                                } else {
                                                    if($n['text_en'] == ''){
                                                        $str = $n['text'];
                                                    } else {
                                                        $str = $n['text_en'];
                                                    }
                                                }
                                                $no_tags = strip_tags($str);
                                                echo substr($no_tags, 0, 150).'(…)';
                                            ?>
                                        </div>

                                        <div class="cta-cont">
                                            <div class="cta">
                                                <div class="txt"><?php echo translateTo('Saiba mais'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                        $noticias_moving_forward_query = "SELECT nc.*
                        FROM noticias_categorias nc
                        WHERE nc.title = 'V21 Rural'";

                        $result_noticias_moving_forward = mysqli_query($conn, $noticias_moving_forward_query);
                        $noticias_moving_forward = array();

                        while ($row_noticias_moving_forward = mysqli_fetch_assoc($result_noticias_moving_forward)) {
                            $noticias_moving_forward[] = $row_noticias_moving_forward;
                        }

                        foreach ($noticias_moving_forward as $n) {
                    ?>
                    <div class="bottom">
                        <div class="cta-cont">
                            <a href="/noticias/atualidade?categoria_id=<?php echo $n['id'] ?>">
                                <div class="cta">
                                    <div class="txt"><?php echo translateTo('Ver mais'); ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="startup-school">
                <a id="startup-school" class="anchor"></a>
                <svg style="position: absolute;margin-left: -1.40625rem;margin-top: -7.96875rem;width: 73%;left: -50%;z-index: -999;top: 10%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="847.572" height="912.917" viewBox="0 0 847.572 912.917">
                    <g id="Grupo_35846" data-name="Grupo 35846" transform="translate(21.43 -254.558)">
                        <path id="Caminho_3765" data-name="Caminho 3765" d="M2676.169,2857.949s316.154,28.446,562.567-337.083c1.55-1.422,150.328-230.411-255.712-341.35,3.1,0-270.047-60.447-299.493-233.967C2685.081,1944.127,2676.169,2857.949,2676.169,2857.949Z" transform="translate(-2697.599 -1690.989)" fill="#f4f5fa" />
                        <path id="edificio_2_vissaium" data-name="edificio 2 vissaium" d="M2676.169,2662.913s356.885,43.048,442.313-265.028c1.219-1.118,53.046-153.856-100.226-245.819,2.437,0-208.239-66.594-336.3-206.517C2683.176,1944.431,2676.169,2662.913,2676.169,2662.913Z" transform="translate(-2697.599 -1563.35)" fill="url(#pattern)" />
                    </g>
                </svg>
                <svg style="position: absolute;margin-left: -1.40625rem;margin-top: -7.96875rem;width: 90%;height: auto;right: -45%;z-index: -999;top: 40%;transform: scaleX(-1);" id="gray-shape" xmlns="http://www.w3.org/2000/svg" width="508.946" height="471.41" viewBox="0 0 508.946 471.41">
                    <path data-name="Caminho 3766" d="M1397,1826.381s20.407,60.465,131.51,98.255c-3.023,0,40.813,14.36,104.3-11.337,1.512,0,151.161-44.781,258.486,105.624-.756-2.267,149.246,390.182-494.3,247.71C1397.212,2266.752,1397,1826.381,1397,1826.381Z" transform="translate(-1397.004 -1826.381)" fill="#f4f5fa"/>
                </svg>
                <svg style="position: absolute;margin-left: -1.40625rem;margin-top: -7.96875rem;width: 28%;height: auto;right: 7%;z-index: -999;top: 50%;" xmlns="http://www.w3.org/2000/svg" width="320" height="299" viewBox="0 0 320 299">
                    <g id="Grupo_1486" data-name="Grupo 1486" transform="translate(-310 -3763)">
                        <circle id="Elipse_67" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3763)" fill="#009aa7" />
                        <circle id="Elipse_68" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3763)" fill="#009aa7" />
                        <circle id="Elipse_69" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3763)" fill="#009aa7" />
                        <circle id="Elipse_70" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3763)" fill="#009aa7" />
                        <circle id="Elipse_71" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3763)" fill="#009aa7" />
                        <circle id="Elipse_72" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3763)" fill="#009aa7" />
                        <circle id="Elipse_73" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3763)" fill="#009aa7" />
                        <circle id="Elipse_74" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3763)" fill="#009aa7" />
                        <circle id="Elipse_75" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3763)" fill="#009aa7" />
                        <circle id="Elipse_76" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3763)" fill="#009aa7" />
                        <circle id="Elipse_67-2" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3804)" fill="#009aa7" />
                        <circle id="Elipse_68-2" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3804)" fill="#009aa7" />
                        <circle id="Elipse_69-2" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3804)" fill="#009aa7" />
                        <circle id="Elipse_70-2" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3804)" fill="#009aa7" />
                        <circle id="Elipse_71-2" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3804)" fill="#009aa7" />
                        <circle id="Elipse_72-2" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3804)" fill="#009aa7" />
                        <circle id="Elipse_73-2" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3804)" fill="#009aa7" />
                        <circle id="Elipse_74-2" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3804)" fill="#009aa7" />
                        <circle id="Elipse_75-2" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3804)" fill="#009aa7" />
                        <circle id="Elipse_76-2" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3804)" fill="#009aa7" />
                        <circle id="Elipse_67-3" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3846)" fill="#009aa7" />
                        <circle id="Elipse_68-3" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3846)" fill="#009aa7" />
                        <circle id="Elipse_69-3" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3846)" fill="#009aa7" />
                        <circle id="Elipse_70-3" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3846)" fill="#009aa7" />
                        <circle id="Elipse_71-3" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3846)" fill="#009aa7" />
                        <circle id="Elipse_72-3" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3846)" fill="#009aa7" />
                        <circle id="Elipse_73-3" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3846)" fill="#009aa7" />
                        <circle id="Elipse_74-3" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3846)" fill="#009aa7" />
                        <circle id="Elipse_75-3" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3846)" fill="#009aa7" />
                        <circle id="Elipse_76-3" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3846)" fill="#009aa7" />
                        <circle id="Elipse_67-4" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3887)" fill="#009aa7" />
                        <circle id="Elipse_68-4" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3887)" fill="#009aa7" />
                        <circle id="Elipse_69-4" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3887)" fill="#009aa7" />
                        <circle id="Elipse_70-4" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3887)" fill="#009aa7" />
                        <circle id="Elipse_71-4" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3887)" fill="#009aa7" />
                        <circle id="Elipse_72-4" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3887)" fill="#009aa7" />
                        <circle id="Elipse_73-4" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3887)" fill="#009aa7" />
                        <circle id="Elipse_74-4" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3887)" fill="#009aa7" />
                        <circle id="Elipse_75-4" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3887)" fill="#009aa7" />
                        <circle id="Elipse_76-4" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3887)" fill="#009aa7" />
                        <circle id="Elipse_67-5" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3929)" fill="#009aa7" />
                        <circle id="Elipse_68-5" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3929)" fill="#009aa7" />
                        <circle id="Elipse_69-5" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3929)" fill="#009aa7" />
                        <circle id="Elipse_70-5" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3929)" fill="#009aa7" />
                        <circle id="Elipse_71-5" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3929)" fill="#009aa7" />
                        <circle id="Elipse_72-5" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3929)" fill="#009aa7" />
                        <circle id="Elipse_73-5" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3929)" fill="#009aa7" />
                        <circle id="Elipse_74-5" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3929)" fill="#009aa7" />
                        <circle id="Elipse_75-5" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3929)" fill="#009aa7" />
                        <circle id="Elipse_76-5" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3929)" fill="#009aa7" />
                        <circle id="Elipse_67-6" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3970)" fill="#009aa7" />
                        <circle id="Elipse_68-6" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3970)" fill="#009aa7" />
                        <circle id="Elipse_69-6" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3970)" fill="#009aa7" />
                        <circle id="Elipse_70-6" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3970)" fill="#009aa7" />
                        <circle id="Elipse_71-6" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3970)" fill="#009aa7" />
                        <circle id="Elipse_72-6" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3970)" fill="#009aa7" />
                        <circle id="Elipse_73-6" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3970)" fill="#009aa7" />
                        <circle id="Elipse_74-6" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3970)" fill="#009aa7" />
                        <circle id="Elipse_75-6" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3970)" fill="#009aa7" />
                        <circle id="Elipse_76-6" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3970)" fill="#009aa7" />
                        <circle id="Elipse_67-7" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 4012)" fill="#009aa7" />
                        <circle id="Elipse_68-7" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 4012)" fill="#009aa7" />
                        <circle id="Elipse_69-7" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 4012)" fill="#009aa7" />
                        <circle id="Elipse_70-7" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 4012)" fill="#009aa7" />
                        <circle id="Elipse_71-7" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 4012)" fill="#009aa7" />
                        <circle id="Elipse_72-7" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 4012)" fill="#009aa7" />
                        <circle id="Elipse_73-7" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 4012)" fill="#009aa7" />
                        <circle id="Elipse_74-7" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 4012)" fill="#009aa7" />
                        <circle id="Elipse_75-7" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 4012)" fill="#009aa7" />
                        <circle id="Elipse_76-7" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 4012)" fill="#009aa7" />
                        <circle id="Elipse_67-8" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 4053)" fill="#009aa7" />
                        <circle id="Elipse_68-8" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 4053)" fill="#009aa7" />
                        <circle id="Elipse_69-8" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 4053)" fill="#009aa7" />
                        <circle id="Elipse_70-8" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 4053)" fill="#009aa7" />
                        <circle id="Elipse_71-8" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 4053)" fill="#009aa7" />
                        <circle id="Elipse_72-8" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 4053)" fill="#009aa7" />
                        <circle id="Elipse_73-8" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 4053)" fill="#009aa7" />
                        <circle id="Elipse_74-8" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 4053)" fill="#009aa7" />
                        <circle id="Elipse_75-8" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 4053)" fill="#009aa7" />
                        <circle id="Elipse_76-8" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 4053)" fill="#009aa7" />
                    </g>
                </svg>
                
                <svg style="position: absolute;margin-left: -1.40625rem;margin-top: -7.96875rem;width: 28%;height: auto;left: -7%;z-index: -999;top: 58.3%;" xmlns="http://www.w3.org/2000/svg" width="320" height="299" viewBox="0 0 320 299">
                    <g id="Grupo_1486" data-name="Grupo 1486" transform="translate(-310 -3763)">
                        <circle id="Elipse_67" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_68" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_69" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_70" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_71" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_72" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_73" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_74" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_75" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_76" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3763)" fill="#b6b8bd" />
                        <circle id="Elipse_67-2" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_68-2" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_69-2" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_70-2" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_71-2" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_72-2" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_73-2" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_74-2" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_75-2" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_76-2" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3804)" fill="#b6b8bd" />
                        <circle id="Elipse_67-3" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_68-3" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_69-3" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_70-3" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_71-3" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_72-3" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_73-3" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_74-3" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_75-3" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_76-3" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3846)" fill="#b6b8bd" />
                        <circle id="Elipse_67-4" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_68-4" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_69-4" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_70-4" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_71-4" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_72-4" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_73-4" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_74-4" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_75-4" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_76-4" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3887)" fill="#b6b8bd" />
                        <circle id="Elipse_67-5" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_68-5" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_69-5" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_70-5" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_71-5" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_72-5" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_73-5" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_74-5" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_75-5" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_76-5" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3929)" fill="#b6b8bd" />
                        <circle id="Elipse_67-6" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_68-6" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_69-6" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_70-6" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_71-6" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_72-6" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_73-6" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_74-6" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_75-6" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_76-6" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3970)" fill="#b6b8bd" />
                        <circle id="Elipse_67-7" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_68-7" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_69-7" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_70-7" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_71-7" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_72-7" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_73-7" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_74-7" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_75-7" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_76-7" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 4012)" fill="#b6b8bd" />
                        <circle id="Elipse_67-8" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_68-8" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_69-8" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_70-8" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_71-8" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_72-8" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_73-8" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_74-8" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_75-8" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 4053)" fill="#b6b8bd" />
                        <circle id="Elipse_76-8" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 4053)" fill="#b6b8bd" />
                    </g>
                </svg>
                <h2>Startup School</h2>
                <div class="line"></div>
                <div class="cont">
                    <div class="top">
                        <div class="cards">
                            <?php
                                $noticias_moving_forward_query = "SELECT n.*, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en
                                FROM noticias n 
                                INNER JOIN noticias_categorias nc 
                                ON nc.id = n.categoria_id 
                                WHERE nc.title = 'Startup School' 
                                AND n.is_visible = 1
                                ORDER BY n.data_inicio DESC 
                                LIMIT 3";
    
                                $result_noticias_moving_forward = mysqli_query($conn, $noticias_moving_forward_query);
                                $noticias_moving_forward = array();
    
                                while ($row_noticias_moving_forward = mysqli_fetch_assoc($result_noticias_moving_forward)) {
                                    $noticias_moving_forward[] = $row_noticias_moving_forward;
                                }

                                foreach ($noticias_moving_forward as $n) {
                            ?>
                            <a href="https://www.v21.pt/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                <div class="card">
                                    <div class="img">
                                        <img class="<?php echo $n['img_align'];?>" src="<?php echo $n['img_src'];?>" alt="<?php echo $n['title'];?>" style="height: 100%; width: auto;">
                                        <div class="filter"></div>
                                    </div>
                                    <div class="info">
                                        <div class="details">
                                            <div class="cat">
                                                <div class="cat-cont">
                                                    <div class="txt">
                                                        <?php 
                                                            if($_SESSION['language_id'] == 1){
                                                                echo $n['categoria_title'];
                                                            } else {
                                                                if($n['categoria_title_en'] == ''){
                                                                    echo $n['categoria_title'];
                                                                } else {
                                                                    echo $n['categoria_title_en'];
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                                        <path id="ic_date_range_24px" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" />
                                                    </svg>
                                                </div>
                                                <div class="txt">
                                                    <?php
                                                        $dia = explode('-', $n['data_inicio'])[2];
                                                        $mes = explode('-', $n['data_inicio'])[1];
                                                        $ano = explode('-', $n['data_inicio'])[0];

                                                        echo $dia . '.' . $mes . '.' . $ano;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <?php 
                                                if($_SESSION['language_id'] == 1){
                                                    echo $n['title'];
                                                } else {
                                                    if($n['title_en'] == ''){
                                                        echo $n['title'];
                                                    } else {
                                                        echo $n['title_en'];
                                                    }
                                                }
                                            ?>
                                        </div>

                                        <div class="line"></div>

                                        <div class="text">
                                            <?php 
                                                // $str = $_SESSION['language_id'] == 1 ? $n['text'] : $n['text_en'];
                                                
                                                if($_SESSION['language_id'] == 1){
                                                    $str =  $n['text'];
                                                } else {
                                                    if($n['text_en'] == ''){
                                                        $str =  $n['text'];
                                                    } else {
                                                        $str =  $n['text_en'];
                                                    }
                                                }

                                                $no_tags = strip_tags($str);
                                                echo substr($no_tags, 0, 150).'(…)';
                                            ?>
                                        </div>

                                        <div class="cta-cont">
                                            <div class="cta">
                                                <div class="txt"><?php echo translateTo('Saiba mais'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                        $noticias_moving_forward_query = "SELECT nc.*
                        FROM noticias_categorias nc
                        WHERE nc.title = 'Startup School'";

                        $result_noticias_moving_forward = mysqli_query($conn, $noticias_moving_forward_query);
                        $noticias_moving_forward = array();

                        while ($row_noticias_moving_forward = mysqli_fetch_assoc($result_noticias_moving_forward)) {
                            $noticias_moving_forward[] = $row_noticias_moving_forward;
                        }

                        foreach ($noticias_moving_forward as $n) {
                    ?>
                    <div class="bottom">
                        <div class="cta-cont">
                            <a href="/noticias/atualidade?categoria_id=<?php echo $n['id'];?>">
                                <div class="cta">
                                    <div class="txt"><?php echo translateTo('Ver mais'); ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="webinars">
                <a id="moving-forward-webinars" class="anchor"></a>
                <h2>Moving Forward Webinars</h2>
                <div class="line"></div>
                <div class="cont">
                    <div class="top">
                        <div class="cards">
                            <?php
                                $noticias_moving_forward_query = "SELECT n.*, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en
                                FROM noticias n 
                                INNER JOIN noticias_categorias nc 
                                ON nc.id = n.categoria_id 
                                WHERE nc.title = 'Moving Forward'
                                AND n.is_visible = 1 
                                ORDER BY n.data_inicio DESC 
                                LIMIT 3";
    
                                $result_noticias_moving_forward = mysqli_query($conn, $noticias_moving_forward_query);
                                $noticias_moving_forward = array();
    
                                while ($row_noticias_moving_forward = mysqli_fetch_assoc($result_noticias_moving_forward)) {
                                    $noticias_moving_forward[] = $row_noticias_moving_forward;
                                }

                                foreach ($noticias_moving_forward as $n) {
                            ?>
                            <a href="https://www.v21.pt/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                <div class="card">
                                    <div class="img">
                                        <img class="<?php echo $n['img_align'];?>" src="<?php echo $n['img_src'];?>" alt="<?php echo $n['title'];?>" style="height: 100%; width: auto;">
                                        <div class="filter"></div>
                                    </div>
                                    <div class="info">
                                        <div class="details">
                                            <div class="cat">
                                                <div class="cat-cont">
                                                    <div class="txt">
                                                        <?php 
                                                            if($_SESSION['language_id'] == 1){
                                                                echo $n['categoria_title'];
                                                            } else {
                                                                if($n['categoria_title_en'] == ''){
                                                                    echo $n['categoria_title'];
                                                                } else {
                                                                    echo $n['categoria_title_en'];
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                                        <path id="ic_date_range_24px" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" />
                                                    </svg>
                                                </div>
                                                <div class="txt">
                                                    <?php
                                                        $dia = explode('-', $n['data_inicio'])[2];
                                                        $mes = explode('-', $n['data_inicio'])[1];
                                                        $ano = explode('-', $n['data_inicio'])[0];

                                                        echo $dia . '.' . $mes . '.' . $ano;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <?php 
                                                if($_SESSION['language_id'] == 1){
                                                    echo $n['title'];
                                                } else {
                                                    if($n['title_en'] == ''){
                                                        echo $n['title'];
                                                    } else {
                                                        echo $n['title_en'];
                                                    }
                                                }
                                            ?>
                                        </div>

                                        <div class="line"></div>

                                        <div class="text">
                                            <?php 

                                                if($_SESSION['language_id'] == 1){
                                                    $str = $n['text'];
                                                } else {
                                                    if($n['text_en'] == ''){
                                                        $str = $n['text'];
                                                    } else {
                                                        $str = $n['text_en'];
                                                    }
                                                }
                                                
                                                $no_tags = strip_tags($str);
                                                echo substr($no_tags, 0, 150).'(…)';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                        $noticias_moving_forward_query = "SELECT nc.*
                        FROM noticias_categorias nc
                        WHERE nc.title = 'Moving Forward'";

                        $result_noticias_moving_forward = mysqli_query($conn, $noticias_moving_forward_query);
                        $noticias_moving_forward = array();

                        while ($row_noticias_moving_forward = mysqli_fetch_assoc($result_noticias_moving_forward)) {
                            $noticias_moving_forward[] = $row_noticias_moving_forward;
                        }

                        foreach ($noticias_moving_forward as $n) {
                    ?>
                    <div class="bottom">
                        <div class="cta-cont">
                            <a href="/noticias/atualidade?categoria_id=<?php echo $n['id'];?>">
                                <div class="cta">
                                    <div class="txt"><?php echo translateTo('Ver mais'); ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>

            <div class="young-leaders yl">
                <a id="young-leaders" class="anchor"></a>
                <svg style="position: absolute;right: -56%;top: 0%;transform: rotate(40deg);" xmlns="http://www.w3.org/2000/svg" width="320" height="299" viewBox="0 0 320 299">
                    <g id="Grupo_1494" data-name="Grupo 1494" transform="translate(-310 -3763)">
                        <circle id="Elipse_67" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3763)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-2" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-2" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-2" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-2" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-2" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-2" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-2" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-2" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-2" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-2" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3804)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-3" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-3" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-3" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-3" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-3" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-3" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-3" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-3" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-3" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-3" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3846)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-4" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-4" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-4" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-4" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-4" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-4" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-4" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-4" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-4" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-4" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3887)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-5" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-5" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-5" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-5" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-5" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-5" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-5" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-5" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-5" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-5" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3929)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-6" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-6" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-6" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-6" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-6" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-6" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-6" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-6" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-6" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-6" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 3970)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-7" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-7" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-7" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-7" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-7" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-7" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-7" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-7" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-7" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-7" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 4012)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_67-8" data-name="Elipse 67" cx="4.5" cy="4.5" r="4.5" transform="translate(310 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_68-8" data-name="Elipse 68" cx="4.5" cy="4.5" r="4.5" transform="translate(345 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_69-8" data-name="Elipse 69" cx="4.5" cy="4.5" r="4.5" transform="translate(379 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_70-8" data-name="Elipse 70" cx="4.5" cy="4.5" r="4.5" transform="translate(414 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_71-8" data-name="Elipse 71" cx="4.5" cy="4.5" r="4.5" transform="translate(448 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_72-8" data-name="Elipse 72" cx="4.5" cy="4.5" r="4.5" transform="translate(483 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_73-8" data-name="Elipse 73" cx="4.5" cy="4.5" r="4.5" transform="translate(518 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_74-8" data-name="Elipse 74" cx="4.5" cy="4.5" r="4.5" transform="translate(552 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_75-8" data-name="Elipse 75" cx="4.5" cy="4.5" r="4.5" transform="translate(587 4053)" fill="rgba(0,154,167,.46)"/>
                        <circle id="Elipse_76-8" data-name="Elipse 76" cx="4.5" cy="4.5" r="4.5" transform="translate(621 4053)" fill="rgba(0,154,167,.46)"/>
                    </g>
                </svg>
                <h2>Young Leaders</h2>
                <div class="line"></div>
                <div class="cont">
                    <div class="top">
                        <div class="cards">
                            <?php
                                $noticias_young_leaders_query = "SELECT n.*, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en
                                FROM noticias n 
                                INNER JOIN noticias_categorias nc 
                                ON nc.id = n.categoria_id 
                                WHERE nc.title = 'Young Leaders' 
                                AND n.is_visible = 1
                                ORDER BY n.data_inicio DESC 
                                LIMIT 3";
    
                                $result_noticias_young_leaders = mysqli_query($conn, $noticias_young_leaders_query);
                                $noticias_young_leaders = array();
    
                                while ($row_noticias_young_leaders = mysqli_fetch_assoc($result_noticias_young_leaders)) {
                                    $noticias_young_leaders[] = $row_noticias_young_leaders;
                                }
    
                                foreach ($noticias_young_leaders as $n) {
                            ?>
                            <a href="https://www.v21.pt/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                <div class="card">
                                    <div class="img">
                                        <img class="<?php echo $n['img_align'];?>" src="<?php echo $n['img_src'];?>" alt="<?php echo $n['title'];?>" style="height: 100%; width: auto;">
                                        <div class="filter"></div>
                                    </div>
                                    <div class="info">
                                        <div class="details">
                                            <div class="cat">
                                                <div class="cat-cont">
                                                    <div class="txt">
                                                        <?php 
                                                            if($_SESSION['language_id'] == 1){
                                                                echo $n['categoria_title'];
                                                            } else {
                                                                if($n['categoria_title_en'] == ''){
                                                                    echo $n['categoria_title'];
                                                                } else {
                                                                    echo $n['categoria_title_en'];
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                                        <path id="ic_date_range_24px" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)" />
                                                    </svg>
                                                </div>
                                                <div class="txt">
                                                    <?php
                                                        $dia = explode('-', $n['data_inicio'])[2];
                                                        $mes = explode('-', $n['data_inicio'])[1];
                                                        $ano = explode('-', $n['data_inicio'])[0];

                                                        echo $dia . '.' . $mes . '.' . $ano;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title">
                                            <?php 
                                                if($_SESSION['language_id'] == 1){
                                                    echo $n['title'];
                                                } else {
                                                    if($n['title_en'] == ''){
                                                        echo $n['title'];
                                                    } else {
                                                        echo $n['title_en'];
                                                    }
                                                }
                                            ?>
                                        </div>

                                        <div class="line"></div>

                                        <div class="text">
                                            <?php 
                                                if($_SESSION['language_id'] == 1){
                                                    $str = $n['text'];
                                                } else {
                                                    if($n['text_en'] == ''){
                                                        $str = $n['text'];
                                                    } else {
                                                        $str = $n['text_en'];
                                                    }
                                                }
                                                $no_tags = strip_tags($str);
                                                echo substr($no_tags, 0, 150).'(…)';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                        $noticias_moving_forward_query = "SELECT nc.*
                        FROM noticias_categorias nc
                        WHERE nc.title = 'Young Leaders'";

                        $result_noticias_moving_forward = mysqli_query($conn, $noticias_moving_forward_query);
                        $noticias_moving_forward = array();

                        while ($row_noticias_moving_forward = mysqli_fetch_assoc($result_noticias_moving_forward)) {
                            $noticias_moving_forward[] = $row_noticias_moving_forward;
                        }

                        foreach ($noticias_moving_forward as $n) {
                    ?>
                    <div class="bottom">
                        <div class="cta-cont">
                            <a href="/noticias/atualidade?categoria_id=<?php echo $n['id'];?>">
                                <div class="cta">
                                    <div class="txt"><?php echo translateTo('Ver mais'); ?></div>
                                </div>
                            </a>
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
} else if ($area == 'atualidade') { //change to 1 when online
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
                            fill: none;
                            stroke: rgba(255, 255, 255, 1);
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 9px;
                        }

                        .cls-1 {
                            stroke-dasharray: 15 27;
                        }
                    </style>
                </defs>
                <polyline class="cls-1 path-lines" points="4.3 4.3 134.5 139.2 152 157.4 163.8 169.6 181.2 187.6 193.8 200.8 211.3 218.9 214.2 221.9 214.2 234.9 214.3 260.4 214.3 277 214.4 302.8 214.4 319.9" />
                <polyline class="cls-1 path-lines" points="307.9 249.9 329.4 250.2 356.2 250.7 371.9 251 399.8 251.4 414.5 251.7 440.7 252.1 445.4 252.2 454.6 261.4 472 278.7 484.6 291.3 502.4 309.2 514.9 321.6" />
                <polyline class="cls-1 path-lines" points="58 245.6 74 245.9 100.9 246.4 116.6 246.6 144.1 247.1 157.9 247.3 186 247.8 202 248.1 228.6 248.5 251.4 248.9" />
                <circle class="cls-2" cx="279.6" cy="250.1" r="28.3" />
            </svg>
            <h1><?php echo translateTo('Notícias'); ?></h1>
        </div>
    </div>

    <div class="content-wrapper">
        <div id="nots-atualidade" class="area">
            <div class="left">
                <div class="cards">

                    <?php
                        $noticias_todas_query = "SELECT n.*, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en 
                        FROM noticias n 
                        INNER JOIN noticias_categorias nc 
                        ON nc.id = n.categoria_id 
                        WHERE n.is_visible = 1
                        ORDER BY n.data_inicio DESC";

                        $result_noticias_todas = mysqli_query($conn, $noticias_todas_query);
                        $noticias_todas = array();

                        while ($row_noticias_todas = mysqli_fetch_assoc($result_noticias_todas)) {
                            $noticias_todas[] = $row_noticias_todas;
                        }

                        foreach ($noticias_todas as $n) {
                            $dia = explode('-', $n['data_inicio'])[2];
                            $mes = explode('-', $n['data_inicio'])[1];
                            $ano = explode('-', $n['data_inicio'])[0];

                            switch ($mes) {
                                case '01':
                                    $month = $_SESSION['language_id'] == 1 ? 'Janeiro' : 'January';
                                    break;
                                case '02':
                                    $month = $_SESSION['language_id'] == 1 ? 'Fevereiro' : 'February';
                                    break;
                                case '03':
                                    $month = $_SESSION['language_id'] == 1 ? 'Março' : 'March';
                                    break;
                                case '04':
                                    $month = $_SESSION['language_id'] == 1 ? 'Abril' : 'April';
                                    break;
                                case '05':
                                    $month = $_SESSION['language_id'] == 1 ? 'Maio' : 'May';
                                    break;
                                case '06':
                                    $month = $_SESSION['language_id'] == 1 ? 'Junho' : 'June';
                                    break;
                                case '07':
                                    $month = $_SESSION['language_id'] == 1 ? 'Julho' : 'July';
                                    break;
                                case '08':
                                    $month = $_SESSION['language_id'] == 1 ? 'Agosto' : 'August';
                                    break;
                                case '09':
                                    $month = $_SESSION['language_id'] == 1 ? 'Setembro' : 'September';
                                    break;
                                case '10':
                                    $month = $_SESSION['language_id'] == 1 ? 'Outubro' : 'October';
                                    break;
                                case '11':
                                    $month = $_SESSION['language_id'] == 1 ? 'Novembro' : 'November';
                                    break;
                                case '12':
                                    $month = $_SESSION['language_id'] == 1 ? 'Dezembro' : 'December';
                                    break;
                                default:
                                    # code...
                                    break;
                            }
                    ?>

                    <div class="card category-<?php echo $n['categoria_id']; ?> month-<?php echo $mes; ?>-year-<?php echo $ano; ?> moreBox">
                        <div class="top">
                            <div class="line">
                                <div class="cat">
                                    <div class="txt">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $n['categoria_title'];
                                            } else {
                                                if($n['categoria_title_en'] == ''){
                                                    echo $n['categoria_title'];
                                                } else {
                                                    echo $n['categoria_title_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="date">
                                    - 
                                    <?php 
                                    if($_SESSION['language_id'] == 1){
                                    ?>
                                    <?php echo $dia; ?> de <?php echo $month; ?> de <?php echo $ano; ?>
                                    <?php
                                    } else {
                                        if($dia == '01') $dia = '1st';
                                        else if($dia == '02') $dia = '2nd';
                                        else if($dia == '03') $dia = '3rd';
                                        else if($dia == '21') $dia = '21st';
                                        else if($dia == '22') $dia = '22nd';
                                        else if($dia == '23') $dia = '23rd';
                                        else $dia = $dia.'th';
                                    ?>
                                    <?php echo $dia; ?> of <?php echo $month; ?>, <?php echo $ano; ?>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="line">
                                <h3>
                                    <?php 
                                        if($_SESSION['language_id'] == 1){
                                            echo $n['title'];
                                        } else {
                                            if($n['title_en'] == ''){
                                                echo $n['title'];
                                            } else {
                                                echo $n['title_en'];
                                            }
                                        }
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <div class="img">
                                <a href="/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                    <img class="<?php echo $n['img_align']; ?>" src="<?php echo $n['img_src']; ?>" alt="Imagem <?php echo $n['title']; ?>">
                                </a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="text">
                                <?php 
                                    if($_SESSION['language_id'] == 1){
                                        $str = $n['text'];
                                    } else {
                                        if($n['text_en'] == ''){
                                            $str = $n['text'];
                                        } else {
                                            $str = $n['text_en'];
                                        }
                                    }
                                    $no_tags = strip_tags($str);
                                    echo substr($no_tags, 0, 150).'(…)';
                                ?>
                            </div>
                            <div class="cta-cont">
                                <a href="/noticias/<?php echo $n['categoria_ref'];?>/<?php echo $n['ref'];?>">
                                    <div class="cta">
                                        <div class="txt"><?php echo translateTo('Saiba mais'); ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>

                <div class="filter-no-item"><span style="margin-top: 20px;"><?php echo translateTo('Não há artigos que correspondam ao conjunto de filtros seleccionados.'); ?></span></div>
                <div class="filter-mask"><span style="margin-top: 20px;"><?php echo translateTo('A carregar...'); ?></span></div>

                <div class="load-more">
                    <div class="cta-cont">
                        <div class="cta">
                            <div class="txt"><?php echo translateTo('Ver mais'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="filters-button">
                    <div class="cta-cont">
                        <div class="cta">
                            <div class="txt"><?php echo translateTo('Abrir filtros'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="filters-wrapper">
                    <div class="container">
                        <div id="search-box">
                            <div>
                                <input type="text" id="resultado" placeholder="Pesquisar..." onkeyup="searchNoticias()">
                                <!-- <input type="submit" id="search-submit" value="pesquisar"> -->
                                <button>
                                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
                                        <path fill="#ffffff" d="M3.625,12.688a8.974,8.974,0,0,1,9.063-9.062,8.974,8.974,0,0,1,9.063,9.063,8.974,8.974,0,0,1-9.062,9.063A8.974,8.974,0,0,1,3.625,12.688ZM25.919,28.456a1.794,1.794,0,0,0,2.537-2.537L22.838,20.3a12.41,12.41,0,0,0,2.537-7.613A12.609,12.609,0,0,0,12.688,0,12.609,12.609,0,0,0,0,12.688,12.609,12.609,0,0,0,12.688,25.375,12.41,12.41,0,0,0,20.3,22.838Z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div id="categories" class="filter-categories">
                            <div class="title-filter"><?php echo translateTo('Categorias'); ?></div>

                            <label id="label-category-all" for="category-all" class="check">
                                <input name="cat-checkbox" class="cat-checkbox filter-all" type="checkbox" id="category-all" value="category-all" checked />
                                <span class="title"><?php echo translateTo('Todas as categorias'); ?></span>
                                <span class="checkmark"></span>
                            </label>

                            <?php
                                $noticias_categorias_query = "SELECT * FROM noticias_categorias";

                                $result_noticias_categorias = mysqli_query($conn, $noticias_categorias_query);
                                $noticias_categorias = array();

                                while ($row_noticias_categorias = mysqli_fetch_assoc($result_noticias_categorias)) {
                                    $noticias_categorias[] = $row_noticias_categorias;
                                }

                                foreach ($noticias_categorias as $n) {
                            ?>
                            <label id="label-category-<?php echo $n['id']; ?>" for="category-<?php echo $n['id']; ?>" class="check">
                                <input name="cat-checkbox" class="cat-checkbox" type="checkbox" id="category-<?php echo $n['id']; ?>" value="category-<?php echo $n['id']; ?>" />
                                <span class="title">
                                    <?php 
                                        if($_SESSION['language_id'] == 1){
                                            echo $n['title'];
                                        } else {
                                            if($n['title_en'] == ''){
                                                echo $n['title'];
                                            } else {
                                                echo $n['title_en'];
                                            }
                                        }
                                    ?>
                                </span>
                                <span class="checkmark"></span>
                            </label>
                            <?php
                                }
                            ?>


                            <div class="title-filter arq"><?php echo translateTo('Arquivo'); ?></div>
                            <?php
                            $get_years = "SELECT distinct YEAR(data_inicio) as year
                                from noticias
                                order by data_inicio desc";

                            $r_years = mysqli_query($conn, $get_years);
                            echo '<div class="years-wrapper">';
                            while ($years = mysqli_fetch_array($r_years)) {
                                echo '<div class="years">';
                                    echo '<div class="year">
                                        <a>'.$years['year'].'</a>';
                                        echo '<svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="4.743" height="7.308" viewBox="0 0 4.743 7.308">
                                            <defs>
                                                <clipPath id="a">
                                                    <rect width="4.743" height="7.308" fill="none"/>
                                                </clipPath>
                                            </defs>
                                            <g clip-path="url(#a)">
                                                <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#0babc5"/>
                                            </g>
                                        </svg>';
                                    echo '</div>';
                                    echo '<div class="months">';
                                        $get_months = "SELECT MONTH(data_inicio) as month,
                                            count(*) as postcount
                                            from noticias
                                            where year(data_inicio) = ".$years['year']."
                                            group by MONTH(data_inicio)";
                                        $r_months = mysqli_query($conn, $get_months);

                                        while($months = mysqli_fetch_array($r_months)){
                                            switch ($months['month']) {
                                                case '1':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Janeiro' : 'January';
                                                    $m_nr = '01';
                                                    break;
                                                case '2':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Fevereiro' : 'February';
                                                    $m_nr = '02';
                                                    break;
                                                case '3':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Março' : 'March';
                                                    $m_nr = '03';
                                                    break;
                                                case '4':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Abril' : 'April';
                                                    $m_nr = '04';
                                                    break;
                                                case '5':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Maio' : 'May';
                                                    $m_nr = '05';
                                                    break;
                                                case '6':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Junho' : 'June';
                                                    $m_nr = '06';
                                                    break;
                                                case '7':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Julho' : 'July';
                                                    $m_nr = '07';
                                                    break;
                                                case '8':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Agosto' : 'August';
                                                    $m_nr = '08';
                                                    break;
                                                case '9':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Setembro' : 'September';
                                                    $m_nr = '09';
                                                    break;
                                                case '10':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Outubro' : 'October';
                                                    $m_nr = '10';
                                                    break;
                                                case '11':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Novembro' : 'November';
                                                    $m_nr = '11';
                                                    break;
                                                case '12':
                                                    $m = $_SESSION['language_id'] == 1 ? 'Dezembro' : 'December';
                                                    $m_nr = '12';
                                                    break;
                                            }
                                            echo '<label for="month-' . $m_nr . '-year-'. $years['year'] .'" class="check">
                                                <input name="date-checkbox" class="cat-checkbox" type="checkbox" id="month-' . $m_nr . '-year-'. $years['year'] .'" value="month-' . $m_nr . '-year-' . $years['year'] . '" />
                                                <span class="title">' . $m . '</span>
                                                <span class="checkmark"></span>
                                            </label>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} else if ($area != 'atualidade') {
    $noticias_todas_query1 = "SELECT n.*, nc.id as categoria_id, nc.ref as categoria_ref, nc.ref_en as categoria_ref_en, nc.title as categoria_title, nc.title_en as categoria_title_en
    FROM noticias n 
    INNER JOIN noticias_categorias nc 
    ON nc.id = n.categoria_id
    WHERE n.ref = '" . $pathinfo[2] . "'
    AND n.is_visible = 1";

    $result_noticias_todas1 = mysqli_query($conn, $noticias_todas_query1);
    $noticias_todas1 = array();

    while ($row_noticias_todas1 = mysqli_fetch_assoc($result_noticias_todas1)) {
        $noticias_todas1[] = $row_noticias_todas1;
    }

    foreach ($noticias_todas1 as $nt) {
        $share_link_fb = "https://www.facebook.com/sharer/sharer.php?u=https://www.v21.pt/noticias/" . ($n['categoria_ref']) . "/" . ($n['ref']);
    ?>
    <div id="banner-noticia">
        <img class="<?php echo $nt['img_align']; ?>" src="<?php echo $nt['img_src']; ?>" alt="Imagem <?php echo $nt['title']; ?>">
        <div class="overlay"></div>
        <svg xmlns="http://www.w3.org/2000/svg" width="519" height="325.484" viewBox="0 0 519 325.5">
            <defs>
                <style>
                    .cls-1,
                    .cls-2 {
                        fill: none;
                        stroke: rgba(255, 255, 255, 1);
                        stroke-linecap: round;
                        stroke-miterlimit: 10;
                        stroke-width: 9px;
                    }

                    .cls-1 {
                        stroke-dasharray: 15 27;
                    }
                </style>
            </defs>
            <polyline class="cls-1 path-lines" points="4.3 4.3 134.5 139.2 152 157.4 163.8 169.6 181.2 187.6 193.8 200.8 211.3 218.9 214.2 221.9 214.2 234.9 214.3 260.4 214.3 277 214.4 302.8 214.4 319.9" />
            <polyline class="cls-1 path-lines" points="307.9 249.9 329.4 250.2 356.2 250.7 371.9 251 399.8 251.4 414.5 251.7 440.7 252.1 445.4 252.2 454.6 261.4 472 278.7 484.6 291.3 502.4 309.2 514.9 321.6" />
            <polyline class="cls-1 path-lines" points="58 245.6 74 245.9 100.9 246.4 116.6 246.6 144.1 247.1 157.9 247.3 186 247.8 202 248.1 228.6 248.5 251.4 248.9" />
            <circle class="cls-2" cx="279.6" cy="250.1" r="28.3" />
        </svg>
        <div class="container">
            <div class="categoria">
                <?php 
                    if($_SESSION['language_id'] == 1){
                        echo $nt['categoria_title'];
                    } else {
                        if($nt['categoria_title_en'] == ''){
                            echo $nt['categoria_title'];
                        } else {
                            echo $nt['categoria_title_en'];
                        }
                    }
                ?>
            </div>
            <h1>
                <?php 
                    if($_SESSION['language_id'] == 1){
                        echo $nt['title'];
                    } else {
                        if($nt['title_en'] == ''){
                            echo $nt['title'];
                        } else {
                            echo $nt['title_en'];
                        }
                    }
                ?>
            </h1>
            <div class="date">
                <?php
                    $dia = explode('-', $nt['data_inicio'])[2];
                    $mes = explode('-', $nt['data_inicio'])[1];
                    $ano = explode('-', $nt['data_inicio'])[0];

                    echo $dia . '.' . $mes . '.' . $ano;
                ?>
            </div>

            <div class="socials">
                <a target="_blank" href="<?php echo $share_link_fb; ?>">
                    <div class="social" data-href="https://www.v21.pt/noticias/<?php echo $nt['categoria_ref'];?>/<?php echo $nt['ref'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <g id="fb_share_button" data-name="fb share button" transform="translate(-611 -768)">
                                <rect width="40" height="40" rx="5" transform="translate(611 768)" fill="rgba(255,255,255,0.5)" />
                                <g id="facebook" transform="translate(624 776.781)">
                                    <path id="Caminho_1205" data-name="Caminho 1205" d="M8.211,8.049V5.122A1.561,1.561,0,0,1,9.854,3.658H11.5V0H8.211A4.681,4.681,0,0,0,3.285,4.39V8.049H0v3.658H3.285V23.414H8.211V11.707H11.5l1.642-3.658Z" fill="#3a364e" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $nt['title']; ?>&url=https://www.v21.pt/noticias/<?php echo $nt['categoria_ref'] ?>/<?php echo $nt['ref'];?>" class="twitter-share-button">
                    <div class="social">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                            <g id="twitter_share_button" data-name="twitter share button" transform="translate(-701 -718)">
                                <rect width="40" height="40" rx="5" transform="translate(701 718)" fill="rgba(255,255,255,0.5)" />
                                <g id="twitter" transform="translate(708.154 680)">
                                    <g id="Grupo_35737" data-name="Grupo 35737" transform="translate(0 48)">
                                        <path id="Caminho_36666" data-name="Caminho 36666" d="M25.846,50.486a11.047,11.047,0,0,1-3.053.837,5.269,5.269,0,0,0,2.331-2.929,10.589,10.589,0,0,1-3.36,1.283A5.3,5.3,0,0,0,12.6,53.3a5.456,5.456,0,0,0,.123,1.208A15,15,0,0,1,1.8,48.966a5.3,5.3,0,0,0,1.628,7.082A5.233,5.233,0,0,1,1.034,55.4v.058A5.323,5.323,0,0,0,5.279,60.66a5.288,5.288,0,0,1-1.389.174,4.685,4.685,0,0,1-1-.09,5.349,5.349,0,0,0,4.951,3.691,10.647,10.647,0,0,1-6.57,2.26A9.923,9.923,0,0,1,0,66.622,14.917,14.917,0,0,0,8.129,69,14.977,14.977,0,0,0,23.21,53.922c0-.234-.008-.46-.019-.685A10.571,10.571,0,0,0,25.846,50.486Z" transform="translate(0 -48)" fill="#3a364e" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="area">
            <div class="news-content">
                <div class="txt">
                    <?php 
                        if($_SESSION['language_id'] == 1){
                            echo $nt['text'];
                        } else {
                            if($nt['text_en'] == ''){
                                echo $nt['text'];
                            } else {
                                echo $nt['text_en'];
                            }
                        }

                        $pdf_ids_query = "SELECT n.pdf_file_id
                        FROM noticias n
                        WHERE id = '" . $nt['id'] . "'";
        
                        $result_pdf_ids = mysqli_query($conn, $pdf_ids_query);
                        $pdf_ids = array();
                    
                        while ($row_pdf_ids = mysqli_fetch_assoc($result_pdf_ids)) {
                            $pdf_ids[] = $row_pdf_ids;
                        }
        
                        $pdf_ids_array = explode(',', $pdf_ids[0]['pdf_file_id']);

                        if(!empty($pdf_ids[0]['pdf_file_id'])){
                            foreach ($pdf_ids_array as $id) {
                                $pdf_url_query = "SELECT file_name, file_url
                                FROM uploaded_files
                                WHERE id = '" . $id . "'"; 

                                $result_pdf_url = mysqli_query($conn, $pdf_url_query);
                                $pdf_url = array();

                                while ($row_pdf_url = mysqli_fetch_assoc($result_pdf_url)) {
                                    $pdf_url[] = $row_pdf_url;
                                }
                                
                                echo '<span><b>Anexos:</b> </span><a target="_blank" href="'.$pdf_url[0]['file_url'].'">'.$pdf_url[0]['file_name'].'</a>';
                            }
                        }
                    ?>
                </div>
                <div class="newsletter-noticia-categoria">
                    <p>
                        <?php 
                            if($_SESSION['language_id'] == 1){
                                echo '<b>Esteja a par de mais notícias sobre ' . $nt['categoria_title'] . ' subscrevendo à nossa newsletter!</b>';
                            } else {
                                echo '<b>Be in touch with more news about ' . $nt['categoria_title_en'] . ' by subscribing to our newsletter!</b>';
                            }
                        ?>
                    </p>
                    <div id="form-newsletter-noticia">
                        <input type="email" placeholder="O seu e-mail" id="email-newsletter">
                        <input id="submit" type="submit" value="Subscrever" data-categoria-id="<?php echo $nt['categoria_id']; ?>">
                        <label class="erro"></label>
                        <?php 
                        if($_SESSION['language_id'] == 1){?>
                            <label class="check newsletter">Confirmo que li e aceito a <a href="/politica-privacidade" target="_blank">Política de Privacidade</a> da Vissaium XXI. 
                                <input id="accept-pp" type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        <?php } else { ?>
                            <label class="check newsletter">I declare that I read and accept the <a href="/politica-privacidade" target="_blank">Privacy Policy</a> of Vissaium XXI. 
                                <input id="accept-pp" type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        <?php }
                        ?>
                        <!-- <label class="check newsletter">Confirmo que li e aceito a <a href="/politica-privacidade" target="_blank">Política de Privacidade</a> da Vissaium XXI. 
                            <input id="accept-pp" type="checkbox">
                            <span class="checkmark"></span>
                        </label> -->
                        <label class="erro erro-pp"></label>
                    </div>
                </div>
            </div>

            <?php
                //NEW CODE
                // $noticias_galeria_query = "SELECT * FROM noticias_galeria
                // WHERE noticias_id = '" . $nt['id'] . "'";

                $photo_ids_query = "SELECT n.photo_gallery_ids
                FROM noticias n
                WHERE id = '" . $nt['id'] . "'";

                $result_photo_ids = mysqli_query($conn, $photo_ids_query);
                $photo_ids = array();
            
                while ($row_photo_ids = mysqli_fetch_assoc($result_photo_ids)) {
                    $photo_ids[] = $row_photo_ids;
                }

                $photo_ids_array = explode(',', $photo_ids[0]['photo_gallery_ids']);

                // print_r($photo_ids);

                if(!empty($photo_ids[0]['photo_gallery_ids'])){
                ?>
                    <div class="noticia">
                        <div class="left">
                            <h2><?php echo translateTo('Galeria'); ?></h2>
                            <div class="line"></div>
                        </div>
                    </div>

                    <div id="bg-slider">
                        <div class="close-pic">
                            <div class="icon">
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-slider no-text noticia">
                    <?php $card = 0;
                            foreach ($photo_ids_array as $id) {
                                $photo_url_query = "SELECT file_name, file_url
                                FROM uploaded_files
                                WHERE id = '" . $id . "'"; 

                                $result_photo_url = mysqli_query($conn, $photo_url_query);
                                $photo_url = array();

                                while ($row_photo_url = mysqli_fetch_assoc($result_photo_url)) {
                                    $photo_url[] = $row_photo_url;
                                }

                                $card++;
                            }
                        if($card > 1){
                        ?>
                        <div class="arrow left" onClick="prevSlidesSingle(-1)">
                            <svg id="left-enabled" xmlns="http://www.w3.org/2000/svg" width="59.096" height="33.786" viewBox="0 0 59.096 33.786">
                                <g transform="translate(49.096 75.702) rotate(180)">
                                    <path id="Caminho_3764" fill="#009aa7" data-name="Caminho 3764" d="M48.427,57.195l-14.61-14.61a2.283,2.283,0,0,0-3.228,3.228L41.3,56.526H-7.717A2.283,2.283,0,0,0-10,58.809a2.283,2.283,0,0,0,2.283,2.283H41.3L30.589,71.805a2.283,2.283,0,0,0,3.228,3.228l14.61-14.61A2.283,2.283,0,0,0,48.427,57.195Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <?php
                            }
                        ?>

                        <div class="cont">
                            <?php
                            $card = 0;
                            foreach ($photo_ids_array as $id) {
                                $photo_url_query = "SELECT file_name, file_url
                                FROM uploaded_files
                                WHERE id = '" . $id . "'"; 

                                $result_photo_url = mysqli_query($conn, $photo_url_query);
                                $photo_url = array();

                                while ($row_photo_url = mysqli_fetch_assoc($result_photo_url)) {
                                    $photo_url[] = $row_photo_url;
                                }

                                $card++;

                            ?>
                            <div class="card <?php echo $card == 1 ? 'active' : ''; ?>" data-card="<?php echo $card; ?>">
                                <img class="normal" src="<?php echo $photo_url[0]['file_url'] ?>" alt="Imagem <?php echo $photo_url[0]['file_name'] ?>">
                                <img class="zoomed" src="<?php echo $photo_url[0]['file_url'] ?>" alt="Imagem <?php echo $photo_url[0]['file_name'] ?>">
                            </div>
                            <?php }?>
                        </div>

                        <?php 
                        if($card > 1){
                        ?>

                        <div class="arrow right" onClick="plusSlidesSingle(1)">
                            <svg id="right-enabled" xmlns="http://www.w3.org/2000/svg" width="59.096" height="33.786" viewBox="0 0 59.096 33.786">
                                <g transform="translate(10 -41.916)">
                                    <path id="Caminho_3764" fill="#009aa7" data-name="Caminho 3764" d="M48.427,57.195l-14.61-14.61a2.283,2.283,0,0,0-3.228,3.228L41.3,56.526H-7.717A2.283,2.283,0,0,0-10,58.809a2.283,2.283,0,0,0,2.283,2.283H41.3L30.589,71.805a2.283,2.283,0,0,0,3.228,3.228l14.61-14.61A2.283,2.283,0,0,0,48.427,57.195Z" transform="translate(0 0)" />
                                </g>
                            </svg>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                    <?php
                }


                // $noticias_galeria_query = "SELECT * FROM noticias_galeria
                // WHERE noticias_id = '" . $nt['id'] . "'";

                // $result_noticias_galeria = mysqli_query($conn, $noticias_galeria_query);
                // $noticias_galeria = array();
            
                // while ($row_noticias_galeria = mysqli_fetch_assoc($result_noticias_galeria)) {
                //     $noticias_galeria[] = $row_noticias_galeria;
                // }
            
                // if($noticias_galeria){
            ?>
                <!-- <div class="noticia">
                    <div class="left">
                        <h2><?php //echo translateTo('Galeria'); ?></h2>
                        <div class="line"></div>
                    </div>
                </div>

                <div id="bg-slider">
                    <div class="close-pic">
                        <div class="icon">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>

                <div class="gallery-slider no-text noticia">
                    <div class="arrow left" onClick="prevSlidesSingle(1)">
                        <svg id="left-enabled" xmlns="http://www.w3.org/2000/svg" width="59.096" height="33.786" viewBox="0 0 59.096 33.786">
                            <g transform="translate(49.096 75.702) rotate(180)">
                                <path id="Caminho_3764" fill="#009aa7" data-name="Caminho 3764" d="M48.427,57.195l-14.61-14.61a2.283,2.283,0,0,0-3.228,3.228L41.3,56.526H-7.717A2.283,2.283,0,0,0-10,58.809a2.283,2.283,0,0,0,2.283,2.283H41.3L30.589,71.805a2.283,2.283,0,0,0,3.228,3.228l14.61-14.61A2.283,2.283,0,0,0,48.427,57.195Z" transform="translate(0 0)" />
                            </g>
                        </svg>
                    </div>

                    <div class="cont">
                        <?php 
                        // $card = 0;
                        //     foreach ($noticias_galeria as $n) { 
                        //         $card++;
                        ?>
                        <div class="card <?php //echo $card == 1 ? 'active' : ''; ?>" data-card="<?php //echo $card; ?>">
                            <img class="normal" src="<?php //echo $n['img_src'] ?>" alt="Imagem <?php // $n['title'] ?>">
                            <img class="zoomed" src="<?php //echo $n['img_src'] ?>" alt="Imagem <?php //echo $n['title'] ?>">
                        </div>
                        <?php //} ?>
                    </div>

                    <div class="arrow right" onClick="plusSlidesSingle(1)">
                        <svg id="right-enabled" xmlns="http://www.w3.org/2000/svg" width="59.096" height="33.786" viewBox="0 0 59.096 33.786">
                            <g transform="translate(10 -41.916)">
                                <path id="Caminho_3764" fill="#009aa7" data-name="Caminho 3764" d="M48.427,57.195l-14.61-14.61a2.283,2.283,0,0,0-3.228,3.228L41.3,56.526H-7.717A2.283,2.283,0,0,0-10,58.809a2.283,2.283,0,0,0,2.283,2.283H41.3L30.589,71.805a2.283,2.283,0,0,0,3.228,3.228l14.61-14.61A2.283,2.283,0,0,0,48.427,57.195Z" transform="translate(0 0)" />
                            </g>
                        </svg>
                    </div>
                </div> -->
            <?php
                // }
            ?>

            <div class="separator-page">
                <div class="line"></div>
            </div>

            <div class="news-nav">
                <div class="left">
                <?php
                    $noticias_todas_prev_query = "SELECT n.*, nc.id as categoria_id, nc.ref as categoria_ref, nc.title as categoria_title 
                    FROM noticias n
                    INNER JOIN noticias_categorias nc 
                    ON nc.id = n.categoria_id
                    WHERE n.is_visible = 1 and n.id = (select max(n.id) from noticias n where n.id < ".$nt['id'].")";

                    $result_noticias_todas_prev = mysqli_query($conn, $noticias_todas_prev_query);
                    $noticias_todas_prev = array();

                    while ($row_noticias_todas_prev = mysqli_fetch_assoc($result_noticias_todas_prev)) {
                        $noticias_todas_prev[] = $row_noticias_todas_prev;
                    }

                    foreach ($noticias_todas_prev as $ntp) {
                ?>
                    
                        <a href="https://www.v21.pt/noticias/<?php echo $ntp['categoria_ref'] ?>/<?php echo $ntp['ref'] ?>">
                            <div class="card">
                                <div class="img">
                                    <img class="<?php echo $ntp['img_align'] ?>" src="<?php echo $ntp['img_src'] ?>" alt="Imagem <?php echo $ntp['title'] ?>">
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $ntp['title'];
                                            } else {
                                                if($ntp['title_en'] == ''){
                                                    echo $ntp['title'];
                                                } else {
                                                    echo $ntp['title_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="txt prev"><?php echo translateTo('< Anterior'); ?></div>
                                </div>
                            </div>
                        </a>
                <?php
                    }
                ?>
                </div>
                <div class="right">
                <?php
                    $noticias_todas_next_query = "SELECT n.*, nc.id as categoria_id, nc.ref as categoria_ref, nc.title as categoria_title 
                    FROM noticias n
                    INNER JOIN noticias_categorias nc 
                    ON nc.id = n.categoria_id
                    WHERE n.is_visible = 1 and n.id = (select min(n.id) from noticias n where n.id > ".$nt['id'].")";

                    $result_noticias_todas_next = mysqli_query($conn, $noticias_todas_next_query);
                    $noticias_todas_next = array();

                    while ($row_noticias_todas_next = mysqli_fetch_assoc($result_noticias_todas_next)) {
                        $noticias_todas_next[] = $row_noticias_todas_next;
                    }

                    foreach ($noticias_todas_next as $ntn) {
                ?>
                        <a href="https://www.v21.pt/noticias/<?php echo $ntn['categoria_ref'] ?>/<?php echo $ntn['ref'] ?>">
                            <div class="card">
                                <div class="img">
                                    <img class="<?php echo $ntn['img_align'] ?>" src="<?php echo $ntn['img_src'] ?>" alt="Imagem <?php echo $ntn['title'] ?>">
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <?php 
                                            if($_SESSION['language_id'] == 1){
                                                echo $ntn['title'];
                                            } else {
                                                if($ntn['title_en'] == ''){
                                                    echo $ntn['title'];
                                                } else {
                                                    echo $ntn['title_en'];
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="txt next"><?php echo translateTo('Seguinte >'); ?></div>
                                </div>
                            </div>
                        </a>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
}
include "include/footer.php";
?>