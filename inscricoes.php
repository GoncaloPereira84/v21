<?php
$area = "inscricoes";
include "include/header.php";

if($pathinfo[0] == 'inscricoes' && !isset($pathinfo[1])) {
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
            <h1>Inscrições</h1>
        </div>
    </div>
    
    <div class="content-wrapper">
        <div class="area">
            <div id="inscricoes">
                <div class="cards">
                <?php
                    $inscricoes_query = "SELECT * FROM inscricoes WHERE is_permanent = 1";

                    $result_inscricoes = mysqli_query($conn, $inscricoes_query);
                    $inscricoes = array();

                    while ($row_inscricoes = mysqli_fetch_assoc($result_inscricoes)) {
                        $inscricoes[] = $row_inscricoes;
                    }

                    foreach ($inscricoes as $i) {
                ?>
                    <div class="card fixed">
                        <img class="lazyload <?php echo $i['img_align'] ?>" src="<?php echo $i['img_src'] ?>" alt="Imagem <?php echo $i['title'] ?>">
                        <div class="filter"></div>
                        <div class="cont">
                            <div class="title">
                                <?php 
                                    if($_SESSION['language_id'] == 1){
                                        echo $i['title'];
                                    } else {
                                        if($i['title_en'] == ''){
                                            echo $i['title'];
                                        } else {
                                            echo $i['title_en'];
                                        }
                                    }
                                ?>
                            </div>
                            <div class="cta-cont">
                                <a href="/inscricoes/<?php echo $i['ref'] ?>">
                                    <div class="cta">
                                        <div class="txt"><?php echo translateTo('Quero inscrever-me!'); ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php 
                    }
                ?>
                </div>
    
                <div class="cards">
                    <?php
                        $inscricoes_query1 = "SELECT * FROM inscricoes WHERE is_permanent = 0";

                        $result_inscricoes1 = mysqli_query($conn, $inscricoes_query1);
                        $inscricoes1 = array();

                        while ($row_inscricoes1 = mysqli_fetch_assoc($result_inscricoes1)) {
                            $inscricoes1[] = $row_inscricoes1;
                        }

                        foreach ($inscricoes1 as $i) {
                    ?>
                    <div class="card mutable">
                        <div class="cont">
                            <div class="left">
                                <div class="img">
                                    <img class="lazyload <?php echo $i['img_align'] ?>" src="<?php echo $i['img_src'] ?>" alt="Imagem <?php echo $i['title'] ?>">
                                </div>
                            </div>
                            <div class="right">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
                                            <path id="ic_date_range_24px" d="M9,11H7v2H9Zm4,0H11v2h2Zm4,0H15v2h2Zm2-7H18V2H16V4H8V2H6V4H5A1.991,1.991,0,0,0,3.01,6L3,20a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,19,4Zm0,16H5V9H19Z" transform="translate(-3 -2)"/>
                                        </svg>
                                    </div>
                                    <div class="txt">
                                        <?php 
                                            $dia1 = explode('-', $i['data_inicio'])[2];
                                            $mes1 = explode('-', $i['data_inicio'])[1];
                                            $ano1 = explode('-', $i['data_inicio'])[0];

                                            echo $dia1 . '.' . $mes1 . '.' . $ano1;
                                        ?> 
                                        a 
                                        <?php 
                                            $dia2 = explode('-', $i['data_fim'])[2];
                                            $mes2 = explode('-', $i['data_fim'])[1];
                                            $ano2 = explode('-', $i['data_fim'])[0];

                                            echo $dia2 . '.' . $mes2 . '.' . $ano2;
                                        ?>
                                    </div>
                                </div>
                                <div class="title"><?php echo $i['title'] ?></div>
                                <div class="desc">
                                    <?php
                                        $str = $_SESSION['language_id'] == 1 ? $i['text'] : $i['text_en'];

                                        if($_SESSION['language_id'] == 1){
                                            $str = $i['text'];
                                        } else {
                                            if($i['text_en'] == ''){
                                                $str = $i['text'];
                                            } else {
                                                $str = $i['text_en'];
                                            }
                                        }

                                        $no_tags = strip_tags($str);
                                        echo substr($no_tags, 0, 150).'(…)';
                                    ?>
                                </div>
                                <div class="ctas">
                                    <div class="cta-left">
                                        <div class="cta">
                                            <div class="txt">+</div>
                                        </div>
                                    </div>
                                    <div class="cta-right">
                                        <div class="cta">
                                            <div class="txt"><?php echo translateTo('Quero inscrever-me!'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
} else if(isset($pathinfo[1]) && $pathinfo[1] != 'atualidade'){
    $inscricoes_query1 = "SELECT * FROM inscricoes WHERE ref = '" . $pathinfo[1] . "';";

    $result_inscricoes1 = mysqli_query($conn, $inscricoes_query1);
    $inscricoes1 = array();

    while ($row_inscricoes1 = mysqli_fetch_assoc($result_inscricoes1)) {
        $inscricoes1[] = $row_inscricoes1;
    }

    foreach ($inscricoes1 as $i) {
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
            <h1><?php echo translateTo('Inscrição'); ?> - <?php echo $_SESSION['language_id'] == 1 ? $i['title'] : $i['title_en'] ?></h1>
        </div>
    </div>
    
    <div class="content-wrapper">
        <div class="area">
            <div id="form-inscricao">
                <form id="inscricao" data-form-name="<?php echo $i['title'] ?>">
                    <!---->
                    <div class="form-fields separator">
                        <div class="title">
                            <?php echo translateTo('Candidato/a'); ?>
                        </div>
                    </div>
                    <div class="form-fields full">
                        <label for="nome-candidato"><?php echo translateTo('Nome'); ?></label>
                        <input id="nome-candidato" type="text" name="nome-candidato">
                        <span class="erro nome-candidato"></span>
                    </div>
                    <!---->
                    <div class="form-fields separator">
                        <div class="title">
                            <?php echo translateTo('Promotores'); ?>
                        </div>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="nome-promotor"><?php echo translateTo('Nome do Promotor Líder'); ?></label>
                        <input id="nome-promotor" type="text" name="nome-promotor">
                        <span class="erro nome-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="morada-promotor"><?php echo translateTo('Morada'); ?></label>
                        <input id="morada-promotor" type="text" name="morada-promotor">
                        <span class="erro morada-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields half">
                        <label for="cp-promotor"><?php echo translateTo('Código-Postal'); ?></label>
                        <input id="cp-promotor" type="text" name="cp-promotor">
                        <span class="erro cp-promotor"></span>
                    </div>
                    <div class="form-fields half">
                        <label for="local-promotor"><?php echo translateTo('Localidade'); ?></label>
                        <input id="local-promotor" type="text" name="local-promotor">
                        <span class="erro local-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields half">
                        <label for="cc-promotor"><?php echo translateTo('Cartão Cidadão Nº.'); ?></label>
                        <input id="cc-promotor" type="text" name="cc-promotor">
                        <span class="erro cc-promotor"></span>
                    </div>
                    <div class="form-fields half">
                        <label for="nif-promotor"><?php echo translateTo('NIF'); ?></label>
                        <input id="nif-promotor" type="text" name="nif-promotor">
                        <span class="erro nif-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="dn-promotor"><?php echo translateTo('Data de nascimento'); ?></label>
                        <input id="dn-promotor" type="text" name="dn-promotor">
                        <span class="erro dn-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="habs-promotor"><?php echo translateTo('Habilitações académicas'); ?></label>
                        <input id="habs-promotor" type="text" name="habs-promotor">
                        <span class="erro habs-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="prof-promotor">Situação profissional</label>
                        <input id="prof-promotor" type="text" name="prof-promotor">
                        <span class="erro prof-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields half">
                        <label for="contacto-promotor">Contacto</label>
                        <input id="contacto-promotor" type="text" name="contacto-promotor">
                        <span class="erro contacto-promotor"></span>
                    </div>
                    <div class="form-fields half">
                        <label for="contacto2-promotor">2º contacto</label>
                        <input id="contacto2-promotor" type="text" name="contacto2-promotor">
                        <span class="erro contacto2-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="email-promotor">E-mail</label>
                        <input id="email-promotor" type="text" name="email-promotor">
                        <span class="erro email-promotor"></span>
                    </div>
                    <!---->
                    <div class="form-fields separator">
                        <div class="title">
                            Empresa (caso já exista)
                        </div>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="nome-empresa">Nome/Denominação Social:</label>
                        <input id="nome-empresa" type="text" name="nome-empresa">
                    </div>
                    <!---->
                    <div class="form-fields half">
                        <label for="nif-empresa">NIF</label>
                        <input id="nif-empresa" type="text" name="nif-empresa">
                    </div>
                    <div class="form-fields half">
                        <label for="data-constituicao">Data de constituição</label>
                        <input id="data-constituicao" type="text" name="data-constituicao">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="morada-empresa">Morada/Sede</label>
                        <input id="morada-empresa" type="text" name="morada-empresa">
                        <span class="erro morada-empresa"></span>
                    </div>
                    <!---->
                    <div class="form-fields half">
                        <label for="cp-empresa">Código-Postal</label>
                        <input id="cp-empresa" type="text" name="cp-empresa">
                    </div>
                    <div class="form-fields half">
                        <label for="local-empresa">Localidade</label>
                        <input id="local-empresa" type="text" name="local-empresa">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="forma-juridica">Forma jurídica</label>
                        <input id="forma-juridica" type="text" name="forma-juridica">
                    </div>
                    <!---->
                    <div class="form-fields third">
                        <label for="cae-principal">CAE Principal</label>
                        <input id="cae-principal" type="text" name="cae-principal">
                    </div>
                    <div class="form-fields two-third">
                        <label for="cae-secundario">CAE's Secundários</label>
                        <input id="cae-secundario" type="text" name="cae-secundario">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="contacto-empresa">Contacto telefónico</label>
                        <input id="contacto-empresa" type="text" name="contacto-empresa">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="email-empresa">E-mail</label>
                        <input id="email-empresa" type="text" name="email-empresa">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="site-empresa">Web</label>
                        <input id="site-empresa" type="text" name="site-empresa">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="n-trabalhadores">Nº. de trabalhadores atuais</label>
                        <input id="n-trabalhadores" type="text" name="n-trabalhadores">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="setor-atividade">Setor de Atividade</label>
                        <input id="setor-atividade" type="text" name="setor-atividade">
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="objeto-social">Objeto Social</label>
                        <textarea name="objeto-social" id="objeto-social" cols="30" rows="10"></textarea>
                    </div>
                    <!---->
                    <div class="form-fields quarter" id="tipo-incubacao">
                        <div class="form-fields full cb">
                            <label form="incubacao-fisica" class="check"><span>Incubação Física</span>
                                <input id="incubacao-fisica" value="Incubação Física" type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-fields full cb">
                            <label form="incubacao-virtual" class="check"><span>Incubação Virtual</span>
                                <input id="incubacao-virtual" value="Incubação Virtual" type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <span class="erro tipo-incubacao"></span>
                    </div>

                    <div class="form-fields quarter">
                    </div>
                    <div class="form-fields quarter">
                    </div>
                    <div class="form-fields quarter">
                    </div>
                    <!---->
                    <div class="form-fields separator">
                        <div class="title">
                            APRESENTAÇÃO DO PROJETO/IDEIA
                        </div>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="desc-projecto">Descrição pormenorizada do projeto/ ideia: </label>
                        <textarea name="desc-projecto" id="desc-projecto" cols="30" rows="10"></textarea>
                        <span class="erro desc-projecto"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="razoes-realizacao">Razões que motivam a realização do projecto: </label>
                        <textarea name="razoes-realizacao" id="razoes-realizacao" cols="30" rows="10"></textarea>
                        <span class="erro razoes-realizacao"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="montante-previsto">Montante do investimento previsto (€ primeiros 2 anos) </label>
                        <textarea name="montante-previsto" id="montante-previsto" cols="30" rows="10"></textarea>
                        <span class="erro montante-previsto"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="postos-criar">Postos de trabalho a criar (primeiros 2 anos)</label>
                        <textarea name="postos-criar" id="postos-criar" cols="30" rows="10"></textarea>
                        <span class="erro postos-criar"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="razoes-apresentacao">Razões que motivam a apresentação da sua candidatura ao V21: </label>
                        <textarea name="razoes-apresentacao" id="razoes-apresentacao" cols="30" rows="10"></textarea>
                        <span class="erro razoes-apresentacao"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="conhecimento-v21">Como teve conhecimento do V21:</label>
                        <textarea name="conhecimento-v21" id="conhecimento-v21" cols="30" rows="10"></textarea>
                        <span class="erro conhecimento-v21"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="expectativas">Quais as expectativas acerca da Incubadora?</label>
                        <textarea name="expectativas" id="expectativas" cols="30" rows="10"></textarea>
                        <span class="erro expectativas"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label for="cv">Anexar CV</label>
                        <input type="file" name="cv" id="cv">
                        <span class="erro cv"></span>
                    </div>
                    <!---->
                    <div class="form-fields full">
                        <label form="accept-pp" class="check"><span>Declaro que li e aceito a</span> <a target="_blank" href="/politica-privacidade">Política de Privacidade</a>.
                            <input id="accept-pp" type="checkbox">
                            <span style="top: 4px;" class="checkmark"></span>
                        </label>
                        <span class="erro accept-pp"></span>
                    </div>
                    <!---->
                    <div class="form-fields quarter">
                    </div>
                    <div class="form-fields quarter">
                    </div>
                    <div class="form-fields quarter">
                    </div>
                    <div class="form-fields quarter end">
                        <div id="submit" class="cta-cont" data-form-name="<?php echo $i['title'] ?>" data-form-id="<?php echo $i['id'] ?>">
                            <div class="cta">
                                <div class="txt">Submeter</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-fields full">
                        <span class="erro submit"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php 
    }
}
include "include/footer.php";
?>