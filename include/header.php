<?php
include "config/start.php";

$pathinfo = getPathInfo();

if (isset($pathinfo[0]) && !isset($pathinfo[1])) $area = $pathinfo[0];
else $area = 'home';

if (isset($pathinfo[1])) $area = $pathinfo[1];

if (isset($pathinfo[1])) define('IMG_PATH', '../../img');
else define('IMG_PATH', '/img');

if ($_SESSION['language_id'] == 1) $lang = 'pt';
else $lang = 'en';
?>

<!DOCTYPE HTML>

<head>
    <meta charset="utf-8" />
    <html lang="<?php echo $lang; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="maximum-scale=1, width=device-width, initial-scale=1.0, user-scalable=no">
    <?php
    //HOME
    if (isset($pathinfo[0]) && !isset($pathinfo[1])) {
        echo '<link rel="icon" type="image/png" href="favicon.png" />';
        echo '<link rel="icon" href="favicon.png" sizes="32x32">
            <link rel="icon" href="favicon.png" sizes="192x192">
            <link rel="apple-touch-icon" href="favicon.png">
            <meta name="msapplication-TileImage" content="favicon.png">';
        if ($pathinfo[0] == 'sobre-nos') {
            echo '<title>' . translateTo('Sobre Nós') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="A Vissaium XXI é um centro de incubação tecnológico em Viseu tem como missão promover o desenvolvimento económico da cidade e a sua inserção no circuito do conhecimento tecnológico." />
                <meta property="og:description" content="A Vissaium XXI é um centro de incubação tecnológico em Viseu tem como missão promover o desenvolvimento económico da cidade e a sua inserção no circuito do conhecimento tecnológico." />
                <meta property="og:url" content="https://www.v21.pt/sobre-nos" />
                <meta property="og:title" content="' . translateTo('Sobre Nós') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'incubacao') {
            echo '<title>' . translateTo('Incubação') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="O V21 – Centro de Incubação Tecnológico de Viseu - Pretende criar e promover em permanência uma rede de parcerias envolvendo diferentes atores, como universidades ou empresas." />
                <meta property="og:description" content="O V21 – Centro de Incubação Tecnológico de Viseu - Pretende criar e promover em permanência uma rede de parcerias envolvendo diferentes atores, como universidades ou empresas." />
                <meta property="og:url" content="https://www.v21.pt/incubacao" />
                <meta property="og:title" content="' . translateTo('Incubação') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'programas-projetos') {
            echo '<title>' . translateTo('Programas e Projetos') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="O V21 – Centro de Incubação Tecnológico de Viseu - possui Programas e Projetos onde qualquer um pode participar para aprender mais sobre empreendedorismo ou para empresas que pretendem lançar-se no mercado." />
                <meta property="og:description" content="O V21 – Centro de Incubação Tecnológico de Viseu - possui Programas e Projetos onde qualquer um pode participar para aprender mais sobre empreendedorismo ou para empresas que pretendem lançar-se no mercado." />
                <meta property="og:url" content="https://www.v21.pt/programas-projetos" />
                <meta property="og:title" content="' . translateTo('Programas e Projetos') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'noticias') {
            echo '<title>' . translateTo('Notícias') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="Consulte as últimas notícias relacionadas com eventos passados e futuros do V21 – Centro de Incubação Tecnológico de Viseu - decorridos na cidade de Viseu." />
                <meta property="og:description" content="Consulte as últimas notícias relacionadas com eventos passados e futuros do V21 – Centro de Incubação Tecnológico de Viseu - decorridos na cidade de Viseu." />
                <meta property="og:url" content="https://www.v21.pt/noticias" />
                <meta property="og:title" content="' . translateTo('Notícias') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'contactos') {
            echo '<title>' . translateTo('Contactos') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="Entre em contacto com o V21 – Centro de Incubação Tecnológico de Viseu - através do nosso formulário e exponha as suas dúvidas e/ou sugestões." />
                <meta property="og:description" content="Entre em contacto com o V21 – Centro de Incubação Tecnológico de Viseu - através do nosso formulário e exponha as suas dúvidas e/ou sugestões." />
                <meta property="og:url" content="https://www.v21.pt/contactos" />
                <meta property="og:title" content="' . translateTo('Contactos') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'inscricoes') {
            echo '<title>' . translateTo('Inscrições') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="Inscreva-se nos programas e projetos que o V21 – Centro de Incubação Tecnológico de Viseu - tem disponíveis para si e para a sua empresa." />
                <meta property="og:description" content="Inscreva-se nos programas e projetos que o V21 – Centro de Incubação Tecnológico de Viseu - tem disponíveis para si e para a sua empresa." />
                <meta property="og:url" content="https://www.v21.pt/inscricoes" />
                <meta property="og:title" content="' . translateTo('Inscrições') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'termos-condicoes') {
            echo '<title>' . translateTo('Termos e Condições') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="Termos e Condições V21" />
                <meta property="og:description" content="Termos e Condições V21" />
                <meta property="og:url" content="https://www.v21.pt/termos-condicoes" />
                <meta property="og:title" content="' . translateTo('Termos e Condições') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        } else if ($pathinfo[0] == 'politica-privacidade') {
            echo '<title>' . translateTo('Política de Privacidade') . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="A VISSAIUM XXI – ASSOCIAÇÃO PARA O DESENVOLVIMENTO DE VISEU, a seguir identificada apenas como V21, no contexto da sua atividade, procede ao tratamento de dados pessoais, pretendendo assegurar com rigor, eficácia e segurança proteção de todos os dados que recolhe e trata." />
                <meta property="og:description" content="A VISSAIUM XXI – ASSOCIAÇÃO PARA O DESENVOLVIMENTO DE VISEU, a seguir identificada apenas como V21, no contexto da sua atividade, procede ao tratamento de dados pessoais, pretendendo assegurar com rigor, eficácia e segurança proteção de todos os dados que recolhe e trata." />
                <meta property="og:url" content="https://www.v21.pt/politica-privacidade" />
                <meta property="og:title" content="' . translateTo('Política de Privacidade') . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        }
    } else if (!isset($pathinfo[0])) {
        echo '<link rel="icon" type="image/png" href="favicon.png" />';
        echo '<link rel="icon" href="favicon.png" sizes="32x32">
            <link rel="icon" href="favicon.png" sizes="192x192">
            <link rel="apple-touch-icon" href="favicon.png">
            <meta name="msapplication-TileImage" content="favicon.png">';
        echo '<title>V21 - Centro de Incubação Tecnológico de Viseu</title>
            <meta name="description" content="A Vissaium XXI é um centro de incubação tecnológico em Viseu tem como missão promover o desenvolvimento económico da cidade e a sua inserção no circuito do conhecimento tecnológico." />
            <meta property="og:description" content="A Vissaium XXI é um centro de incubação tecnológico em Viseu tem como missão promover o desenvolvimento económico da cidade e a sua inserção no circuito do conhecimento tecnológico." />
            <meta property="og:url" content="https://www.v21.pt" />
            <meta property="og:title" content="V21 - Centro de Incubação Tecnológico de Viseu" />
            <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';

    ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DR4LY8XKWC"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-DR4LY8XKWC');
        </script>
    <?php
    } else if (isset($pathinfo[1])) {
        echo '<link rel="icon" type="image/png" href="../favicon.png" />';
        echo '<link rel="icon" href="../favicon.png" sizes="32x32">
            <link rel="icon" href="../favicon.png" sizes="192x192">
            <link rel="apple-touch-icon" href="../favicon.png">
            <meta name="msapplication-TileImage" content="../favicon.png">';

        if(($pathinfo[1] == 'atualidade')){
            if (isset(parse_url( "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", $component = -1 )['query'])) {
                $news_category_id = explode('=', parse_url( "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", $component = -1 )['query'])[1];

                $title = '';
                $description = '';
                switch ($news_category_id){
                    case 1:
                        $title = 'V21 Rural';
                        $description = 'Consulte as últimas notícias relacionadas com o programa V21 Rural do V21 – Centro de Incubação Tecnológico de Viseu.';
                        break;
                    case 2:
                        $title = 'Startup School';
                        $description = 'Consulte as últimas notícias relacionadas com o programa Startup School do V21 – Centro de Incubação Tecnológico de Viseu.';
                        break;
                    case 3:
                        $title = 'Moving Forward';
                        $description = 'Consulte as últimas notícias relacionadas com o programa Moving Forward do V21 – Centro de Incubação Tecnológico de Viseu.';
                        break;
                    case 4:
                        $title = 'Young Leaders';
                        $description = 'Consulte as últimas notícias relacionadas com o programa Young Leaders do V21 – Centro de Incubação Tecnológico de Viseu.';
                        break;
                    case 5:
                        $title = 'Geral';
                        $description = 'Consulte as últimas notícias gerais do V21 – Centro de Incubação Tecnológico de Viseu relativas a programas e projetos decorridos.';
                        break;
                    default:
                        break;
                }
                echo '<title>Notícias - ' . $title . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                    <meta name="description" content="'.$description.'" />
                    <meta property="og:description" content="'.$description.'" />
                    <meta property="og:url" content="http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" />
                    <meta property="og:title" content="Notícias - ' . $title . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                    <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
            } else {
                echo '<title>Notícias - Atualidades | V21 - Centro de Incubação Tecnológico de Viseu</title>
                    <meta name="description" content="Consulte as últimas notícias relacionadas com eventos do V21 – Centro de Incubação Tecnológico de Viseu - decorridos na cidade de Viseu." />
                    <meta property="og:description" content="Consulte as últimas notícias relacionadas com eventos do V21 – Centro de Incubação Tecnológico de Viseu - decorridos na cidade de Viseu." />
                    <meta property="og:url" content="https://www.v21.pt/noticias/atualidade" />
                    <meta property="og:title" content="Notícias - Atualidade | V21 - Centro de Incubação Tecnológico de Viseu" />
                    <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
            } 
        }
        
    }
    
    if (isset($pathinfo[0]) && ($pathinfo[0] == 'noticias' && isset($pathinfo[2]))) {
        $categoria = $pathinfo[1];
        $noticia = $pathinfo[2];

        $noticias_todas_query1 = "SELECT n.*, nc.id as categoria_id, nc.ref as categoria_ref, nc.title as categoria_title 
        FROM noticias n 
        INNER JOIN noticias_categorias nc 
        ON nc.id = n.categoria_id
        WHERE n.ref = '" . $pathinfo[2] . "'";

        $result_noticias_todas1 = mysqli_query($conn, $noticias_todas_query1);
        $noticias_todas1 = array();

        while ($row_noticias_todas1 = mysqli_fetch_assoc($result_noticias_todas1)) {
            $noticias_todas1[] = $row_noticias_todas1;
        }

        foreach ($noticias_todas1 as $n) {
            $titulo = $n['title'];
            $str = $n['text'];
            $no_tags = strip_tags($str);

            echo '<link rel="icon" type="image/png" href="../../favicon.png" />';
            echo '<link rel="icon" href="../../favicon.png" sizes="32x32">
            <link rel="icon" href="../../favicon.png" sizes="192x192">
            <link rel="apple-touch-icon" href="../../favicon.png">
            <meta name="msapplication-TileImage" content="../../favicon.png">';
            echo '<title>' . $n['title'] . ' | Notícias | V21 - Centro de Incubação Tecnológica de Viseu</title>
            <meta name="description" content="'.substr($no_tags, 0, 120).'(…)" />
            <meta property="og:description" content="'.substr($no_tags, 0, 120).'(…)" />
            <meta property="og:url" content="https://www.v21.pt/noticias/'.$n['categoria_ref'].'/'.$n['ref'].'" />
            <meta property="og:title" content="' . $n['title'] . ' | Notícias | V21 - Centro de Incubação Tecnológica de Viseu" />
            <meta property="og:image" content="' . $n['img_src'] . '" />';
        }
    }
    
    if (isset($pathinfo[1]) && $pathinfo[0] == 'inscricoes') {
        echo '<link rel="icon" type="image/png" href="../favicon.png" />';
        echo '<link rel="icon" href="../favicon.png" sizes="32x32">
            <link rel="icon" href="../favicon.png" sizes="192x192">
            <link rel="apple-touch-icon" href="../favicon.png">
            <meta name="msapplication-TileImage" content="../favicon.png">';

        $inscricoes_query = "SELECT * FROM inscricoes WHERE ref = '" . $pathinfo[1] . "';";

        $result_inscricoes = mysqli_query($conn, $inscricoes_query);
        $inscricoes = array();

        while ($row_inscricoes = mysqli_fetch_assoc($result_inscricoes)) {
            $inscricoes[] = $row_inscricoes;
        }

        foreach ($inscricoes as $i) {
            echo '<title>Inscrição - ' . $i['title'] . ' | V21 - Centro de Incubação Tecnológico de Viseu</title>
                <meta name="description" content="' . $i['title'] . '" />
                <meta property="og:description" content="' . $i['title'] . '" />
                <meta property="og:url" content="https://www.v21.pt/inscricoes/' . $i['ref'] . '" />
                <meta property="og:title" content="Inscrição - ' . $i['title'] . ' | V21 - Centro de Incubação Tecnológico de Viseu" />
                <meta property="og:image" content="https://www.v21.pt/img/logo.png" />';
        }
    }
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/jpeg" />
    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="canonical" href="https://www.v21.pt/">

    <?php
    if ($area == 'home') {
        echo '<link rel="stylesheet" href="/css/homepage.min.css">';
    }
    if ($area == 'sobre-nos' || $area == 'incubacao' || $area == 'programas-projetos' || $area == 'noticias' || $area == 'contactos' || $area == 'inscricoes' || $area == 'termos-condicoes' || $area == 'politica-privacidade') {
        echo '<link rel="stylesheet" href="/css/banner.min.css">';
    }
    if ($area == 'sobre-nos' || $area == 'incubacao' || $area == 'programas-projetos') {
        echo '<link rel="stylesheet" href="/css/galeria.min.css">';
    }

    if ($area == 'noticia') {
        echo '<link rel="stylesheet" href="/css/banner-noticia.min.css">';
    }

    if(isset($pathinfo[0]) && (isset($pathinfo[0]) == 'noticias' && isset($pathinfo[2]))){
        echo '<link rel="stylesheet" href="/css/banner-noticia.min.css">';
    }

    if ((isset($pathinfo[1]) && $pathinfo[1] == 'atualidade') || ((isset($pathinfo[0])) && $pathinfo[0] == 'inscricoes' && isset($pathinfo[1]))) { //change to 1 when online
        echo '<link rel="stylesheet" href="/css/banner.min.css">';
    }

    if ((isset($pathinfo[0])) && $pathinfo[0] == 'pesquisa') { //change to 1 when online
        echo '<link rel="stylesheet" href="/css/banner.min.css">';
    }
    ?>
</head>

<body class="preload" data-area="<?php echo $area; ?>">
    <?php
    //HOME
    if (!isset($pathinfo[0])) {
       echo '<script type="application/ld+json">
       {
         "@context": "https://schema.org",
         "@type": "Organization",
         "name": "Vissaium XXI - Centro de Incubação Tecnológico de Viseu",
         "alternateName": "V21",
         "url": "https://www.v21.pt/",
         "logo": "https://www.v21.pt/img/logo.png",
         "sameAs": [
           "https://www.facebook.com/VissaiumXXI/",
           "https://twitter.com/V21Viseu",
           "https://www.instagram.com/vissaiumxxi/",
           "https://www.youtube.com/channel/UCEyFSMiQ0uHRa0SpFrl5uzQ",
           "https://www.linkedin.com/in/centro-de-incuba%C3%A7%C3%A3o-tecnol%C3%B3gica-de-viseu-a67359195/"
         ]
       }
       </script>';
    }
    ?>
    <?php
        if (isset($pathinfo[0]) && ($pathinfo[0] == 'noticias' && isset($pathinfo[2]))) {
            $categoria = $pathinfo[1];
            $noticia = $pathinfo[2];

            $noticias_todas_query1 = "SELECT n.*, nc.id as categoria_id, nc.ref as categoria_ref, nc.title as categoria_title 
            FROM noticias n 
            INNER JOIN noticias_categorias nc 
            ON nc.id = n.categoria_id
            WHERE n.ref = '" . $pathinfo[2] . "'";

            $result_noticias_todas1 = mysqli_query($conn, $noticias_todas_query1);
            $noticias_todas1 = array();

            while ($row_noticias_todas1 = mysqli_fetch_assoc($result_noticias_todas1)) {
                $noticias_todas1[] = $row_noticias_todas1;
            }

            foreach ($noticias_todas1 as $n) {
                $titulo = $n['title'];

                echo '<script type="application/ld+json">
                    {
                        "@context": "https://schema.org",
                        "@type": "NewsArticle",
                        "mainEntityOfPage": {
                            "@type": "WebPage",
                            "@id": "https://www.v21.pt/noticias/'.$n['categoria_ref'].'/'.$n['ref'].'"
                    },
                        "headline": "' . $n['title'] . '",
                        "image": "' . $n['img_src'] . '",  
                        "author": {
                            "@type": "Organization",
                            "name": "Vissaium XXI - Centro de Incubação Tecnológico de Viseu"
                    },  
                        "publisher": {
                            "@type": "Organization",
                            "name": "Vissaium XXI - Centro de Incubação Tecnológico de Viseu",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https://www.v21.pt/img/logo.png"
                            }
                    },
                        "datePublished": "' . $n['data_inicio'] . '",
                        "dateModified": "' . $n['data_fim'] . '"
                    }
                </script>';
            }
        } 
    ?>
    <div id="loader">
        <div class="container">
            <img id="logo-loader" src="<?php echo IMG_PATH ?>/logo.png" alt="Logo Vissaium XXI Loader">
            <div id="progressbar">
                <div id="blue">
                    <div id="percentage">0%</div>
                </div>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="wrapper">
            <div class="left">
                <a href="/">
                    <div id="logo">
                        <img src="<?php echo IMG_PATH ?>/logo.png" alt="Logo Vissaium XXI">
                    </div>
                </a>
            </div>
            <div class="right">
                <div id="menu">
                    <div class="menu-items">
                        <div class="menu-item <?php if ($area == 'sobre-nos') { ?>active<?php } ?>">
                            <a href="/sobre-nos">V21</a>
                            <span></span>
                            <div class="submenu">
                                <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                    <defs>
                                        <style>
                                            .b-1 {
                                                fill: #009AA7;
                                            }

                                            .b-2 {
                                                opacity: 0.75;
                                            }

                                            .b-3 {
                                                fill: none;
                                                stroke: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <g id="elems-group">
                                        <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                        <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                    </g>
                                </svg>
                                <div class="submenu-items">
                                    <div class="submenu-item">
                                        <?php if ($area == 'sobre-nos') { ?>
                                            <a onClick="toHash('.missao')"><?php echo translateTo('Missão'); ?></a>
                                        <?php } else { ?>
                                            <a href="/sobre-nos#missao"><?php echo translateTo('Missão'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'sobre-nos') { ?>
                                            <a onClick="toHash('.objectivos')"><?php echo translateTo('Objetivos'); ?></a>
                                        <?php } else { ?>
                                            <a href="/sobre-nos#objetivos"><?php echo translateTo('Objetivos'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'sobre-nos') { ?>
                                            <a onClick="toHash('.especializacao')"><?php echo translateTo('Áreas de Especialização'); ?></a>
                                        <?php } else { ?>
                                            <a href="/sobre-nos#areas-especializacao"><?php echo translateTo('Áreas de Especialização'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'sobre-nos') { ?>
                                            <a onClick="toHash('.orgaos-sociais')"><?php echo translateTo('Órgãos Sociais'); ?></a>
                                        <?php } else { ?>
                                            <a href="/sobre-nos#orgaos-sociais"><?php echo translateTo('Órgãos Sociais'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'sobre-nos') { ?>
                                            <a onClick="toHash('.associados')"><?php echo translateTo('Associados Fundadores'); ?></a>
                                        <?php } else { ?>
                                            <a href="/sobre-nos#associados-fundadores"><?php echo translateTo('Associados Fundadores'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'sobre-nos') { ?>
                                            <a onClick="toHash('.parceiros')"><?php echo translateTo('Parceiros'); ?></a>
                                        <?php } else { ?>
                                            <a href="/sobre-nos#parceiros"><?php echo translateTo('Parceiros'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item <?php if ($area == 'incubacao') { ?>active<?php } ?>">
                            <a href="/incubacao"><?php echo translateTo('Incubação'); ?></a>
                            <span></span>
                            <div class="submenu">
                                <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                    <defs>
                                        <style>
                                            .b-1 {
                                                fill: #009AA7;
                                            }

                                            .b-2 {
                                                opacity: 0.75;
                                            }

                                            .b-3 {
                                                fill: none;
                                                stroke: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <g id="elems-group">
                                        <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                        <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                    </g>
                                </svg>
                                <div class="submenu-items">
                                    <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                            <a onClick="toHash('.incubacao-intro')"><?php echo translateTo('Apresentação'); ?></a>
                                        <?php } else { ?>
                                            <a href="/incubacao#apresentacao"><?php echo translateTo('Apresentação'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                            <a onClick="toHash('.incubacao')"><?php echo translateTo('Centro de Incubação'); ?></a>
                                        <?php } else { ?>
                                            <a href="/incubacao#centro-incubacao"><?php echo translateTo('Centro de Incubação'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                            <a onClick="toHash('.fablab')">Fablab</a>
                                        <?php } else { ?>
                                            <a href="/incubacao#fablab">Fablab</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                            <a onClick="toHash('.base-rural')"><?php echo translateTo('Incubadora de Base Rural'); ?></a>
                                        <?php } else { ?>
                                            <a href="/incubacao#incubadora-base-rural"><?php echo translateTo('Incubadora de Base Rural'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                            <a onClick="toHash('.servicos')"><?php echo translateTo('Serviços'); ?></a>
                                        <?php } else { ?>
                                            <a href="/incubacao#servicos"><?php echo translateTo('Serviços'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <!-- <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                        <a onClick="toHash('.projetos')">Projetos</a>
                                        <?php } else { ?>
                                        <a href="/incubacao#projetos">Projetos</a>
                                        <?php } ?>
                                    </div> -->
                                    <div class="submenu-item">
                                        <?php if ($area == 'incubacao') { ?>
                                            <a onClick="toHash('#galeria')"><?php echo translateTo('Galeria'); ?></a>
                                        <?php } else { ?>
                                            <a href="/incubacao#galeria-incubacao"><?php echo translateTo('Galeria'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item <?php if ($area == 'programas-projetos') { ?>active<?php } ?>">
                            <a href="/programas-projetos"><?php echo translateTo('Programas | Projetos'); ?></a>
                            <span></span>
                            <div class="submenu">
                                <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                    <defs>
                                        <style>
                                            .b-1 {
                                                fill: #009AA7;
                                            }

                                            .b-2 {
                                                opacity: 0.75;
                                            }

                                            .b-3 {
                                                fill: none;
                                                stroke: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <g id="elems-group">
                                        <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                        <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                    </g>
                                </svg>
                                <div class="submenu-items">
                                    <div class="submenu-item">
                                        <?php if ($area == 'programas-projetos') { ?>
                                            <a onClick="toHash('.moving-forward')">Moving Forward</a>
                                        <?php } else { ?>
                                            <a href="/programas-projetos#moving-forward">Moving Forward</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'programas-projetos') { ?>
                                            <a onClick="toHash('.programas-intro')">Startup School</a>
                                        <?php } else { ?>
                                            <a href="/programas-projetos#startup-school">Startup School</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'programas-projetos') { ?>
                                            <a onClick="toHash('.rural')">V21 Rural</a>
                                        <?php } else { ?>
                                            <a href="/programas-projetos#v21-rural">V21 Rural</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'programas-projetos') { ?>
                                            <a onClick="toHash('.young')">Young Leaders</a>
                                        <?php } else { ?>
                                            <a href="/programas-projetos#young-leaders">Young Leaders</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'programas-projetos') { ?>
                                            <a onClick="toHash('.testemunhos')"><?php echo translateTo('Testemunhos'); ?></a>
                                        <?php } else { ?>
                                            <a href="/programas-projetos#testemunhos"><?php echo translateTo('Testemunhos'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'programas-projetos') { ?>
                                            <a onClick="toHash('#galeria')"><?php echo translateTo('Galeria'); ?></a>
                                        <?php } else { ?>
                                            <a href="/programas-projetos#galeria-programas-projetos"><?php echo translateTo('Galeria'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item <?php if ($area == 'noticias' || $pathinfo[0] == 'noticias') { ?>active<?php } ?>">
                            <a href="/noticias"><?php echo translateTo('Notícias'); ?></a>
                            <span></span>
                            <div class="submenu">
                                <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                    <defs>
                                        <style>
                                            .b-1 {
                                                fill: #009AA7;
                                            }

                                            .b-2 {
                                                opacity: 0.75;
                                            }

                                            .b-3 {
                                                fill: none;
                                                stroke: #fff;
                                            }
                                        </style>
                                    </defs>
                                    <g id="elems-group">
                                        <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                        <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                    </g>
                                </svg>
                                <div class="submenu-items">
                                    <div class="submenu-item">
                                        <?php if ($area == 'noticias') { ?>
                                            <a onClick="toHash('.atualidade')"><?php echo translateTo('Atualidade'); ?></a>
                                        <?php } else { ?>
                                            <a href="/noticias#atualidade"><?php echo translateTo('Atualidade'); ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'noticias') { ?>
                                            <a onClick="toHash('.noticias')">V21 Rural</a>
                                        <?php } else { ?>
                                            <a href="/noticias#v21-rural">V21 Rural</a>
                                        <?php } ?>
                                    </div>
                                    <!-- <div class="submenu-item">
                                        <?php if ($area == 'noticias') { ?>
                                        <a onClick="toHash('.inscricoes')">Inscrições</a>
                                        <?php } else { ?>
                                        <a href="/noticias#inscricoes">Inscrições</a>
                                        <?php } ?>
                                    </div> -->
                                    <div class="submenu-item">
                                        <?php if ($area == 'noticias') { ?>
                                            <a onClick="toHash('.startup-school')">Startup School</a>
                                        <?php } else { ?>
                                            <a href="/noticias#startup-school">Startup School</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'noticias') { ?>
                                            <a onClick="toHash('.webinars')">Moving Forward Webinars</a>
                                        <?php } else { ?>
                                            <a href="/noticias#moving-forward-webinars">Moving Forward Webinars</a>
                                        <?php } ?>
                                    </div>
                                    <div class="submenu-item">
                                        <?php if ($area == 'noticias') { ?>
                                            <a onClick="toHash('.yl')">Young Leaders</a>
                                        <?php } else { ?>
                                            <a href="/noticias#young-leaders">Young Leaders</a>
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="submenu-item">
                                        <a href="/noticias/atualidade">Todas as Notícias</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="menu-item <?php if ($area == 'contactos') { ?>active<?php } ?>">
                            <a href="/contactos"><?php echo translateTo('Contactos'); ?></a>
                            <span></span>
                        </div>
                        <div class="menu-item inscricoes">
                            <a href="/inscricoes">
                                <div class="btn">
                                    <div class="txt"><?php echo translateTo('Inscrições'); ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="search">
                        <div class="btn">
                            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
                                <path fill="#009aa7" d="M3.625,12.688a8.974,8.974,0,0,1,9.063-9.062,8.974,8.974,0,0,1,9.063,9.063,8.974,8.974,0,0,1-9.062,9.063A8.974,8.974,0,0,1,3.625,12.688ZM25.919,28.456a1.794,1.794,0,0,0,2.537-2.537L22.838,20.3a12.41,12.41,0,0,0,2.537-7.613A12.609,12.609,0,0,0,12.688,0,12.609,12.609,0,0,0,0,12.688,12.609,12.609,0,0,0,12.688,25.375,12.41,12.41,0,0,0,20.3,22.838Z"></path>
                            </svg>
                        </div>
                    </div> -->
                </div>

                <div id="socials-contacts">
                    <?php
                        $contactos_query = "SELECT * FROM contactos";
                
                        $result_contactos = mysqli_query($conn, $contactos_query);
                        $contactos = array();
                
                        while ($row_contactos = mysqli_fetch_assoc($result_contactos)) {
                            $contactos[] = $row_contactos;
                        }
                
                        foreach ($contactos as $c) {
                    ?>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.6" height="16.601" viewBox="0 0 16.6 16.601">
                            <g id="phone-fill" transform="translate(-0.006)">
                                <g id="Grupo_1704" data-name="Grupo 1704" transform="translate(0.006)">
                                    <path id="Caminho_3876" data-name="Caminho 3876" d="M12.626,55.525a1.163,1.163,0,0,0-1.758,0c-.411.408-.822.815-1.226,1.23a.242.242,0,0,1-.339.062c-.266-.145-.549-.263-.8-.421a12.753,12.753,0,0,1-3.074-2.8,7.284,7.284,0,0,1-1.1-1.765.253.253,0,0,1,.062-.325c.411-.4.812-.8,1.216-1.213a1.168,1.168,0,0,0,0-1.8c-.321-.325-.643-.643-.964-.967s-.66-.667-.995-.995a1.171,1.171,0,0,0-1.758,0c-.415.408-.812.826-1.233,1.226a2,2,0,0,0-.629,1.351A5.723,5.723,0,0,0,.46,51.577,14.967,14.967,0,0,0,3.116,56a16.439,16.439,0,0,0,5.444,4.259,7.874,7.874,0,0,0,3.016.877,2.21,2.21,0,0,0,1.9-.722c.352-.394.75-.753,1.123-1.13A1.175,1.175,0,0,0,14.6,57.5Q13.618,56.508,12.626,55.525Z" transform="translate(-0.006 -44.544)" fill="#009aa7"/>
                                    <path id="Caminho_3877" data-name="Caminho 3877" d="M241.6,100.912l1.275-.218A5.722,5.722,0,0,0,238.034,96l-.18,1.282a4.422,4.422,0,0,1,3.745,3.631Z" transform="translate(-229.638 -92.684)" fill="#009aa7"/>
                                    <path id="Caminho_3878" data-name="Caminho 3878" d="M248.323,2.688A9.4,9.4,0,0,0,242.934,0l-.18,1.282a8.2,8.2,0,0,1,6.94,6.726l1.275-.218A9.468,9.468,0,0,0,248.323,2.688Z" transform="translate(-234.368)" fill="#009aa7"/>
                                </g>
                            </g>
                        </svg>
                        <div class="txt">
                            <a href="tel:<?php echo $c['tlf']; ?>"><?php echo $c['tlf']; ?></a>
                        </div>
                    </div>
                    <div class="item email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.783" height="11.616" viewBox="0 0 14.783 11.616">
                            <g id="email" transform="translate(0 -59.013)">
                                <g id="Grupo_1703" data-name="Grupo 1703" transform="translate(0 59.013)">
                                    <path id="Caminho_3872" data-name="Caminho 3872" d="M29.954,328.041a1.263,1.263,0,0,0,.865-.326l-4.188-4.188-.29.208q-.47.346-.763.54a4.7,4.7,0,0,1-.78.4,2.376,2.376,0,0,1-.908.2h-.016a2.375,2.375,0,0,1-.908-.2,4.689,4.689,0,0,1-.78-.4q-.293-.194-.763-.54l-.289-.21-4.189,4.19a1.264,1.264,0,0,0,.865.326Z" transform="translate(-16.491 -316.425)" fill="#009aa7"/>
                                    <path id="Caminho_3873" data-name="Caminho 3873" d="M.833,199.273A4.374,4.374,0,0,1,0,198.555v6.372l3.692-3.692Q2.584,200.462.833,199.273Z" transform="translate(0 -194.81)" fill="#009aa7"/>
                                    <path id="Caminho_3874" data-name="Caminho 3874" d="M416.174,199.273q-1.685,1.141-2.865,1.965l3.69,3.69v-6.373A4.552,4.552,0,0,1,416.174,199.273Z" transform="translate(-402.216 -194.81)" fill="#009aa7"/>
                                    <path id="Caminho_3875" data-name="Caminho 3875" d="M13.469,59.013H1.326a1.178,1.178,0,0,0-.978.429,1.664,1.664,0,0,0-.342,1.072A1.928,1.928,0,0,0,.46,61.641a4.093,4.093,0,0,0,.965.953q.28.2,1.691,1.176c.508.352.949.659,1.329.923l.833.582.123.088.227.164q.268.194.445.314t.429.268a2.5,2.5,0,0,0,.474.223,1.313,1.313,0,0,0,.412.074h.016a1.313,1.313,0,0,0,.412-.074,2.5,2.5,0,0,0,.474-.223q.252-.149.429-.268t.445-.314l.227-.164.123-.088.835-.58,3.026-2.1a3.924,3.924,0,0,0,1.006-1.015,2.183,2.183,0,0,0,.4-1.246,1.331,1.331,0,0,0-1.32-1.32Z" transform="translate(-0.006 -59.013)" fill="#009aa7"/>
                                </g>
                            </g>
                        </svg>
                        <div class="txt">
                            <a href="mailto:<?php echo $c['email']; ?>"><?php echo $c['email']; ?></a>
                        </div>
                    </div>
                    <div class="item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.238" height="18.276" viewBox="0 0 13.238 18.276">
                            <g id="location-fill" transform="translate(-70.573)">
                                <g id="Grupo_1705" data-name="Grupo 1705" transform="translate(70.573)">
                                    <path id="Caminho_3879" data-name="Caminho 3879" d="M77.192,0a6.626,6.626,0,0,0-6.619,6.619c0,4.529,5.923,11.179,6.176,11.46a.6.6,0,0,0,.887,0c.252-.281,6.176-6.93,6.176-11.46A6.627,6.627,0,0,0,77.192,0Zm0,9.949a3.33,3.33,0,1,1,3.33-3.33A3.334,3.334,0,0,1,77.192,9.949Z" transform="translate(-70.573 0)" fill="#009aa7"/>
                                </g>
                            </g>
                        </svg>
                        <div class="txt"><?php echo $c['title1']; ?> <?php echo $c['morada1']; ?></div>
                    </div>
                    <div class="item socials">
                        <div class="social">
                            <a href="<?php echo $c['facebook']; ?>" target="_blank" rel="noreferrer" title="Facebook V21">
                                <svg id="_003-facebook" data-name="003-facebook" xmlns="http://www.w3.org/2000/svg" width="13.138" height="23.414" viewBox="0 0 13.138 23.414">
                                    <g id="Grupo_1283" data-name="Grupo 1283" transform="translate(0)">
                                        <path id="Caminho_1205" data-name="Caminho 1205" d="M8.211,8.049V5.122A1.561,1.561,0,0,1,9.854,3.658H11.5V0H8.211A4.681,4.681,0,0,0,3.285,4.39V8.049H0v3.658H3.285V23.414H8.211V11.707H11.5l1.642-3.658Z" fill="#009aa7"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="social">
                            <a href="<?php echo $c['instagram']; ?>" target="_blank" rel="noreferrer" title="Instagram V21">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23.96" height="23.96" viewBox="0 0 23.96 23.96">
                                <g id="instagram" transform="translate(0 23.96) rotate(-90)">
                                    <g id="Grupo_1285" data-name="Grupo 1285">
                                        <g id="Grupo_1284" data-name="Grupo 1284">
                                            <path id="Caminho_1209" data-name="Caminho 1209" d="M17,0H6.96A6.968,6.968,0,0,0,0,6.96V17a6.968,6.968,0,0,0,6.96,6.96H17A6.968,6.968,0,0,0,23.96,17V6.96A6.968,6.968,0,0,0,17,0Zm5.088,17A5.094,5.094,0,0,1,17,22.088H6.96A5.094,5.094,0,0,1,1.872,17V6.96A5.094,5.094,0,0,1,6.96,1.872H17A5.094,5.094,0,0,1,22.088,6.96Z" fill="#009aa7"/>
                                        </g>
                                    </g>
                                    <g id="Grupo_1287" data-name="Grupo 1287" transform="translate(5.522 5.522)">
                                        <g id="Grupo_1286" data-name="Grupo 1286">
                                            <path id="Caminho_1210" data-name="Caminho 1210" d="M6.458,0a6.458,6.458,0,1,0,6.458,6.458A6.465,6.465,0,0,0,6.458,0Zm0,11.044a4.586,4.586,0,1,1,4.586-4.586A4.591,4.591,0,0,1,6.458,11.044Z" fill="#009aa7"/>
                                        </g>
                                    </g>
                                    <g id="Grupo_1289" data-name="Grupo 1289" transform="translate(17.596 4.493)">
                                        <g id="Grupo_1288" data-name="Grupo 1288">
                                            <ellipse id="Elipse_91" data-name="Elipse 91" cx="0.936" cy="0.936" rx="0.936" ry="0.936" fill="#009aa7"/>
                                        </g>
                                    </g>
                                </g>
                                </svg>
                            </a>
                        </div>
                        <div class="social">
                            <a href="<?php echo $c['linkedin']; ?>" target="_blank" rel="noreferrer" title="LinkedIn V21">
                                <svg id="linkedin_1_" data-name="linkedin (1)" xmlns="http://www.w3.org/2000/svg" width="24.43" height="23.96" viewBox="0 0 24.43 23.96">
                                    <path id="Caminho_36560" data-name="Caminho 36560" d="M311.483,280.548h.006v-8.96c0-4.383-.944-7.76-6.068-7.76a5.32,5.32,0,0,0-4.791,2.633h-.071v-2.224H295.7v16.31h5.059v-8.076c0-2.126.4-4.183,3.036-4.183,2.595,0,2.633,2.427,2.633,4.319v7.941Z" transform="translate(-287.059 -256.588)" fill="#009aa7"/>
                                    <path id="Caminho_36561" data-name="Caminho 36561" d="M13.794,277.866h5.065v16.31H13.794Z" transform="translate(-13.391 -270.215)" fill="#009aa7"/>
                                    <path id="Caminho_36562" data-name="Caminho 36562" d="M2.934,0A2.947,2.947,0,1,0,5.867,2.934,2.935,2.935,0,0,0,2.934,0Z" fill="#009aa7"/>
                                </svg>
                            </a>
                        </div>
                        <div class="social">
                            <a href="<?php echo $c['twitter']; ?>" target="_blank" rel="noreferrer" title="Twitter V21">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" width="24.43" height="23.96">
                                    <g>
                                        <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                            c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                            c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                            c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                            c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                            c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                            C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                            C480.224,136.96,497.728,118.496,512,97.248z" fill="#009aa7"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="social">
                            <a href="<?php echo $c['youtube']; ?>" target="_blank" rel="noreferrer" title="YouTube V21">
                                <svg height="682pt" viewBox="-21 -117 682.66672 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0"  fill="#009aa7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="item langs">
                        <?php
                            if($_SESSION["language_id"] == 1) {
                                echo '<span class="lang active" data-lang="1">PT</span>&nbsp;|&nbsp;<span class="lang" data-lang="2">EN</span>';
                            } else {
                                echo '<span class="lang" data-lang="1">PT</span>&nbsp;|&nbsp;<span class="lang active" data-lang="2">EN</span>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="header-mobile">
        <div class="wrapper">
            <div class="left">
                <a href="/">
                    <div id="logo">
                        <img src="<?php echo IMG_PATH ?>/logo.png" alt="Logo Vissaium XXI">
                    </div>
                </a>
            </div>
            <div class="right">
                <div id="hamburguer">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

                <div class="menu-cont">
                    <div id="menu">
                        <div class="menu-items">
                            <div class="menu-item <?php if($area == 'sobre-nos'){ ?>active<?php } ?>">
                                <div class="page">V21</div>
                                <span></span>
                                <div class="submenu">
                                    <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                        <defs>
                                            <style>
                                                .b-1{fill:#009AA7;}.b-2{opacity:0.75;}.b-3{fill:none;stroke:#fff;}
                                            </style>
                                        </defs>
                                        <g id="elems-group">
                                            <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                            <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        </g>
                                    </svg>
                                    <div class="submenu-items">
                                        <div class="submenu-item">
                                            <?php if($area == 'sobre-nos') {?>
                                            <a onClick="toHash('.missao')"><?php echo translateTo('Missão'); ?></a>
                                            <?php } else {?>
                                            <a href="/sobre-nos#missao"><?php echo translateTo('Missão'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'sobre-nos') {?>
                                            <a onClick="toHash('.objectivos')"><?php echo translateTo('Objetivos'); ?></a>
                                            <?php } else {?>
                                            <a href="/sobre-nos#objetivos"><?php echo translateTo('Objetivos'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">                                        
                                            <?php if($area == 'sobre-nos') {?>
                                            <a onClick="toHash('.especializacao')"><?php echo translateTo('Áreas de Especialização'); ?></a>
                                            <?php } else {?>
                                            <a href="/sobre-nos#areas-especializacao"><?php echo translateTo('Áreas de Especialização'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'sobre-nos') {?>
                                            <a onClick="toHash('.orgaos-sociais')"><?php echo translateTo('Órgãos Sociais'); ?></a>
                                            <?php } else {?>
                                            <a href="/sobre-nos#orgaos-sociais"><?php echo translateTo('Órgãos Sociais'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'sobre-nos') {?>
                                            <a onClick="toHash('.associados')"><?php echo translateTo('Associados Fundadores'); ?></a>
                                            <?php } else {?>
                                            <a href="/sobre-nos#associados-fundadores"><?php echo translateTo('Associados Fundadores'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'sobre-nos') {?>
                                            <a onClick="toHash('.parceiros')"><?php echo translateTo('Parceiros'); ?></a>
                                            <?php } else {?>
                                            <a href="/sobre-nos#parceiros"><?php echo translateTo('Parceiros'); ?></a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item <?php if($area == 'incubacao'){ ?>active<?php } ?>">
                                <div class="page"><?php echo translateTo('Incubação'); ?></div>
                                <span></span>
                                <div class="submenu">
                                    <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                        <defs>
                                            <style>
                                                .b-1{fill:#009AA7;}.b-2{opacity:0.75;}.b-3{fill:none;stroke:#fff;}
                                            </style>
                                        </defs>
                                        <g id="elems-group">
                                            <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                            <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        </g>
                                    </svg>
                                    <div class="submenu-items">
                                        <div class="submenu-item">
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('.incubacao-intro')"><?php echo translateTo('Apresentação'); ?></a>
                                            <?php } else {?>
                                            <a href="/incubacao#apresentacao"><?php echo translateTo('Apresentação'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('.incubacao')"><?php echo translateTo('Centro de Incubação'); ?></a>
                                            <?php } else {?>
                                            <a href="/incubacao#centro-incubacao"><?php echo translateTo('Centro de Incubação'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">                                        
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('.fablab')">Fablab</a>
                                            <?php } else {?>
                                            <a href="/incubacao#fablab">Fablab</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('.base-rural')"><?php echo translateTo('Incubadora de Base Rural'); ?></a>
                                            <?php } else {?>
                                            <a href="/incubacao#incubadora-base-rural"><?php echo translateTo('Incubadora de Base Rural'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('.servicos')"><?php echo translateTo('Serviços'); ?></a>
                                            <?php } else {?>
                                            <a href="/incubacao#servicos"><?php echo translateTo('Serviços'); ?></a>
                                            <?php }?>
                                        </div>
                                        <!-- <div class="submenu-item">
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('.projetos')">Projetos</a>
                                            <?php } else {?>
                                            <a href="/incubacao#projetos">Projetos</a>
                                            <?php }?>
                                        </div> -->
                                        <div class="submenu-item">
                                            <?php if($area == 'incubacao') {?>
                                            <a onClick="toHash('#galeria-mobile')"><?php echo translateTo('Galeria'); ?></a>
                                            <?php } else {?>
                                            <a href="/incubacao#galeria-incubacao"><?php echo translateTo('Galeria'); ?></a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item <?php if($area == 'programas-projetos'){ ?>active<?php } ?>">
                                <div class="page"><?php echo translateTo('Programas | Projetos'); ?></div>
                                <span></span>
                                <div class="submenu">
                                    <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                        <defs>
                                            <style>
                                                .b-1{fill:#009AA7;}.b-2{opacity:0.75;}.b-3{fill:none;stroke:#fff;}
                                            </style>
                                        </defs>
                                        <g id="elems-group">
                                            <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                            <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        </g>
                                    </svg>
                                    <div class="submenu-items">
                                        <div class="submenu-item">
                                            <?php if($area == 'programas-projetos') {?>
                                            <a onClick="toHash('.moving-forward')">Moving Forward</a>
                                            <?php } else {?>
                                            <a href="/programas-projetos#moving-forward">Moving Forward</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'programas-projetos') {?>
                                            <a onClick="toHash('.programas-intro')">Startup School</a>
                                            <?php } else {?>
                                            <a href="/programas-projetos#startup-school">Startup School</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'programas-projetos') {?>
                                            <a onClick="toHash('.rural')">V21 Rural</a>
                                            <?php } else {?>
                                            <a href="/programas-projetos#v21-rural">V21 Rural</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'programas-projetos') {?>
                                            <a onClick="toHash('.young')">Young Leaders</a>
                                            <?php } else {?>
                                            <a href="/programas-projetos#young-leaders">Young Leaders</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'programas-projetos') {?>
                                            <a onClick="toHash('.testemunhos-mobile')"><?php echo translateTo('Testemunhos'); ?></a>
                                            <?php } else {?>
                                            <a href="/programas-projetos#testemunhos"><?php echo translateTo('Testemunhos'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'programas-projetos') {?>
                                            <a onClick="toHash('#galeria-mobile')"><?php echo translateTo('Galeria'); ?></a>
                                            <?php } else {?>
                                            <a href="/programas-projetos#galeria-programas-projetos"><?php echo translateTo('Galeria'); ?></a>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item <?php if($area == 'noticias' || $pathinfo[0] == 'noticias'){ ?>active<?php } ?>">
                                <div class="page"><?php echo translateTo('Notícias'); ?></div>
                                <span></span>
                                <div class="submenu">
                                    <svg class="ballon-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.26 30.89">
                                        <defs>
                                            <style>
                                                .b-1{fill:#009AA7;}.b-2{opacity:0.75;}.b-3{fill:none;stroke:#fff;}
                                            </style>
                                        </defs>
                                        <g id="elems-group">
                                            <polygon id="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <image class="b-2" width="32" height="21" transform="translate(7.22 3.98)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAVCAYAAAAnzezqAAAACXBIWXMAAAsSAAALEgHS3X78AAABtUlEQVRIS8WW6U4DMQyEv+xBSwW8/4tC7w0/7Gm8dxepwpJVbS6Px+OkKefMf1q1tuDV1qwtmLOUUhqO5T/Qmbbu8cDRZVm+BcgmAB68cq/dZXf3DuieBfEUgJC1ArfujY9n4AZc3QVklY1VDQyCN8AbsHNvfbzDAp/9+4IB6lJKi9pYBDAI3mLB34EDsPdvAbgAJ4whaePmc9sBhOCiXMEFINKffH7UGcDNG2ayHJMAgthqCuUKrsw7rNYCUPtcFGqFleUK3KfKMQIQgqveyli0t1iQM0VsUZxN+FWnHCkgeh0yxUCs+R74BD4wIC1F8WJANe58f0MfRIyRgz8WP2yi7gfgCwOx82VX+lkPKVfQnf9WGOAbDjillMTCnAh1uDKpfUz1TmFvDt+xFEokYyU4YZ3SE+pSG8brVtnFuZpCO5TsBVjr4p6RTQHIGFUX4Bs7+BjWdsG1fghUAO5Y5j8U0c53Qc45uw4EQH1+pH/v94QULAIBO+dK6YLR9TzHQIeJRmwMS7BkkWp1ShRhD/jkYzR4civKoZN1XDAxpVYd3YaLr2H407E1cLQMzD5ITz3Hr7RfaPm3LaHvZsgAAAAASUVORK5CYII=" />
                                            <polygon id="triangle-2" data-name="triangle" class="b-3" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                            <polygon id="triangle-3" data-name="triangle" class="b-1" points="23.67 18.46 15.52 18.46 19.6 14.89 23.67 11.32 27.74 14.89 31.82 18.46 23.67 18.46" />
                                        </g>
                                    </svg>
                                    <div class="submenu-items">
                                        <div class="submenu-item">
                                            <?php if($area == 'noticias') {?>
                                            <a onClick="toHash('.atualidade')"><?php echo translateTo('Atualidade'); ?></a>
                                            <?php } else {?>
                                            <a href="/noticias#atualidade"><?php echo translateTo('Atualidade'); ?></a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'noticias') {?>
                                            <a onClick="toHash('.noticias')">V21 Rural</a>
                                            <?php } else {?>
                                            <a href="/noticias#v21-rural">V21 Rural</a>
                                            <?php }?>
                                        </div>
                                        <!-- <div class="submenu-item">
                                            <?php if($area == 'noticias') {?>
                                            <a onClick="toHash('.inscricoes')">Inscrições</a>
                                            <?php } else {?>
                                            <a href="/noticias#inscricoes">Inscrições</a>
                                            <?php }?>
                                        </div> -->
                                        <div class="submenu-item">
                                            <?php if($area == 'noticias') {?>
                                            <a onClick="toHash('.startup-school')">Startup School</a>
                                            <?php } else {?>
                                            <a href="/noticias#startup-school">Startup School</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'noticias') {?>
                                            <a onClick="toHash('.webinars')">Moving Forward Webinars</a>
                                            <?php } else {?>
                                            <a href="/noticias#moving-forward-webinars">Moving Forward Webinars</a>
                                            <?php }?>
                                        </div>
                                        <div class="submenu-item">
                                            <?php if($area == 'noticias') {?>
                                            <a onClick="toHash('.yl')">Young Leaders</a>
                                            <?php } else {?>
                                            <a href="/noticias#young-leaders">Young Leaders</a>
                                            <?php }?>
                                        </div>
                                        
                                        <div class="submenu-item">
                                            <a href="/noticias/atualidade">Todas as Notícias</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="menu-item <?php if($area == 'contactos'){ ?>active<?php } ?>">
                                <a href="/contactos"><?php echo translateTo('Contactos'); ?></a>
                                <span></span>
                            </div>
                            <div class="menu-item inscricoes">
                                <a href="/inscricoes">
                                    <div class="btn">
                                        <div class="txt"><?php echo translateTo('Inscrições');?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="search">
                            <div class="btn">
                                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
                                    <path fill="#009aa7" d="M3.625,12.688a8.974,8.974,0,0,1,9.063-9.062,8.974,8.974,0,0,1,9.063,9.063,8.974,8.974,0,0,1-9.062,9.063A8.974,8.974,0,0,1,3.625,12.688ZM25.919,28.456a1.794,1.794,0,0,0,2.537-2.537L22.838,20.3a12.41,12.41,0,0,0,2.537-7.613A12.609,12.609,0,0,0,12.688,0,12.609,12.609,0,0,0,0,12.688,12.609,12.609,0,0,0,12.688,25.375,12.41,12.41,0,0,0,20.3,22.838Z"></path>
                                </svg>
                            </div>
                        </div> -->
                        <div id="socials-contacts">
                            <div class="item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.6" height="16.601" viewBox="0 0 16.6 16.601">
                                    <g id="phone-fill" transform="translate(-0.006)">
                                        <g id="Grupo_1704" data-name="Grupo 1704" transform="translate(0.006)">
                                            <path id="Caminho_3876" data-name="Caminho 3876" d="M12.626,55.525a1.163,1.163,0,0,0-1.758,0c-.411.408-.822.815-1.226,1.23a.242.242,0,0,1-.339.062c-.266-.145-.549-.263-.8-.421a12.753,12.753,0,0,1-3.074-2.8,7.284,7.284,0,0,1-1.1-1.765.253.253,0,0,1,.062-.325c.411-.4.812-.8,1.216-1.213a1.168,1.168,0,0,0,0-1.8c-.321-.325-.643-.643-.964-.967s-.66-.667-.995-.995a1.171,1.171,0,0,0-1.758,0c-.415.408-.812.826-1.233,1.226a2,2,0,0,0-.629,1.351A5.723,5.723,0,0,0,.46,51.577,14.967,14.967,0,0,0,3.116,56a16.439,16.439,0,0,0,5.444,4.259,7.874,7.874,0,0,0,3.016.877,2.21,2.21,0,0,0,1.9-.722c.352-.394.75-.753,1.123-1.13A1.175,1.175,0,0,0,14.6,57.5Q13.618,56.508,12.626,55.525Z" transform="translate(-0.006 -44.544)" fill="#009aa7"/>
                                            <path id="Caminho_3877" data-name="Caminho 3877" d="M241.6,100.912l1.275-.218A5.722,5.722,0,0,0,238.034,96l-.18,1.282a4.422,4.422,0,0,1,3.745,3.631Z" transform="translate(-229.638 -92.684)" fill="#009aa7"/>
                                            <path id="Caminho_3878" data-name="Caminho 3878" d="M248.323,2.688A9.4,9.4,0,0,0,242.934,0l-.18,1.282a8.2,8.2,0,0,1,6.94,6.726l1.275-.218A9.468,9.468,0,0,0,248.323,2.688Z" transform="translate(-234.368)" fill="#009aa7"/>
                                        </g>
                                    </g>
                                </svg>
                                <div class="txt">
                                    <a href="tel:+351232436474">+351 232 436 474</a>
                                </div>
                            </div>
                            <div class="item email">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.783" height="11.616" viewBox="0 0 14.783 11.616">
                                    <g id="email" transform="translate(0 -59.013)">
                                        <g id="Grupo_1703" data-name="Grupo 1703" transform="translate(0 59.013)">
                                            <path id="Caminho_3872" data-name="Caminho 3872" d="M29.954,328.041a1.263,1.263,0,0,0,.865-.326l-4.188-4.188-.29.208q-.47.346-.763.54a4.7,4.7,0,0,1-.78.4,2.376,2.376,0,0,1-.908.2h-.016a2.375,2.375,0,0,1-.908-.2,4.689,4.689,0,0,1-.78-.4q-.293-.194-.763-.54l-.289-.21-4.189,4.19a1.264,1.264,0,0,0,.865.326Z" transform="translate(-16.491 -316.425)" fill="#009aa7"/>
                                            <path id="Caminho_3873" data-name="Caminho 3873" d="M.833,199.273A4.374,4.374,0,0,1,0,198.555v6.372l3.692-3.692Q2.584,200.462.833,199.273Z" transform="translate(0 -194.81)" fill="#009aa7"/>
                                            <path id="Caminho_3874" data-name="Caminho 3874" d="M416.174,199.273q-1.685,1.141-2.865,1.965l3.69,3.69v-6.373A4.552,4.552,0,0,1,416.174,199.273Z" transform="translate(-402.216 -194.81)" fill="#009aa7"/>
                                            <path id="Caminho_3875" data-name="Caminho 3875" d="M13.469,59.013H1.326a1.178,1.178,0,0,0-.978.429,1.664,1.664,0,0,0-.342,1.072A1.928,1.928,0,0,0,.46,61.641a4.093,4.093,0,0,0,.965.953q.28.2,1.691,1.176c.508.352.949.659,1.329.923l.833.582.123.088.227.164q.268.194.445.314t.429.268a2.5,2.5,0,0,0,.474.223,1.313,1.313,0,0,0,.412.074h.016a1.313,1.313,0,0,0,.412-.074,2.5,2.5,0,0,0,.474-.223q.252-.149.429-.268t.445-.314l.227-.164.123-.088.835-.58,3.026-2.1a3.924,3.924,0,0,0,1.006-1.015,2.183,2.183,0,0,0,.4-1.246,1.331,1.331,0,0,0-1.32-1.32Z" transform="translate(-0.006 -59.013)" fill="#009aa7"/>
                                        </g>
                                    </g>
                                </svg>
                                <div class="txt">
                                    <a href="mailto:geral@v21.pt">geral@v21.pt</a>
                                </div>
                            </div>
                            <div class="item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.238" height="18.276" viewBox="0 0 13.238 18.276">
                                    <g id="location-fill" transform="translate(-70.573)">
                                        <g id="Grupo_1705" data-name="Grupo 1705" transform="translate(70.573)">
                                            <path id="Caminho_3879" data-name="Caminho 3879" d="M77.192,0a6.626,6.626,0,0,0-6.619,6.619c0,4.529,5.923,11.179,6.176,11.46a.6.6,0,0,0,.887,0c.252-.281,6.176-6.93,6.176-11.46A6.627,6.627,0,0,0,77.192,0Zm0,9.949a3.33,3.33,0,1,1,3.33-3.33A3.334,3.334,0,0,1,77.192,9.949Z" transform="translate(-70.573 0)" fill="#009aa7"/>
                                        </g>
                                    </g>
                                </svg>
                                <div class="txt">Edifício Vissaium XXI Rua Dr. Luís Nava 3500-846 Viseu</div>
                            </div>
                            <div class="item socials">
                                <div class="social">
                                    <a href="<?php echo $c['facebook']; ?>" target="_blank" rel="noreferrer" title="Facebook V21">
                                        <svg id="_003-facebook" data-name="003-facebook" xmlns="http://www.w3.org/2000/svg" width="13.138" height="23.414" viewBox="0 0 13.138 23.414">
                                            <g id="Grupo_1283" data-name="Grupo 1283" transform="translate(0)">
                                                <path id="Caminho_1205" data-name="Caminho 1205" d="M8.211,8.049V5.122A1.561,1.561,0,0,1,9.854,3.658H11.5V0H8.211A4.681,4.681,0,0,0,3.285,4.39V8.049H0v3.658H3.285V23.414H8.211V11.707H11.5l1.642-3.658Z" fill="#009aa7"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $c['instagram']; ?>" target="_blank" rel="noreferrer" title="Instagram V21">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.96" height="23.96" viewBox="0 0 23.96 23.96">
                                        <g id="instagram" transform="translate(0 23.96) rotate(-90)">
                                            <g id="Grupo_1285" data-name="Grupo 1285">
                                                <g id="Grupo_1284" data-name="Grupo 1284">
                                                    <path id="Caminho_1209" data-name="Caminho 1209" d="M17,0H6.96A6.968,6.968,0,0,0,0,6.96V17a6.968,6.968,0,0,0,6.96,6.96H17A6.968,6.968,0,0,0,23.96,17V6.96A6.968,6.968,0,0,0,17,0Zm5.088,17A5.094,5.094,0,0,1,17,22.088H6.96A5.094,5.094,0,0,1,1.872,17V6.96A5.094,5.094,0,0,1,6.96,1.872H17A5.094,5.094,0,0,1,22.088,6.96Z" fill="#009aa7"/>
                                                </g>
                                            </g>
                                            <g id="Grupo_1287" data-name="Grupo 1287" transform="translate(5.522 5.522)">
                                                <g id="Grupo_1286" data-name="Grupo 1286">
                                                    <path id="Caminho_1210" data-name="Caminho 1210" d="M6.458,0a6.458,6.458,0,1,0,6.458,6.458A6.465,6.465,0,0,0,6.458,0Zm0,11.044a4.586,4.586,0,1,1,4.586-4.586A4.591,4.591,0,0,1,6.458,11.044Z" fill="#009aa7"/>
                                                </g>
                                            </g>
                                            <g id="Grupo_1289" data-name="Grupo 1289" transform="translate(17.596 4.493)">
                                                <g id="Grupo_1288" data-name="Grupo 1288">
                                                    <ellipse id="Elipse_91" data-name="Elipse 91" cx="0.936" cy="0.936" rx="0.936" ry="0.936" fill="#009aa7"/>
                                                </g>
                                            </g>
                                        </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $c['linkedin']; ?>" target="_blank" rel="noreferrer" title="LinkedIn V21">
                                        <svg id="linkedin_1_" data-name="linkedin (1)" xmlns="http://www.w3.org/2000/svg" width="24.43" height="23.96" viewBox="0 0 24.43 23.96">
                                            <path id="Caminho_36560" data-name="Caminho 36560" d="M311.483,280.548h.006v-8.96c0-4.383-.944-7.76-6.068-7.76a5.32,5.32,0,0,0-4.791,2.633h-.071v-2.224H295.7v16.31h5.059v-8.076c0-2.126.4-4.183,3.036-4.183,2.595,0,2.633,2.427,2.633,4.319v7.941Z" transform="translate(-287.059 -256.588)" fill="#009aa7"/>
                                            <path id="Caminho_36561" data-name="Caminho 36561" d="M13.794,277.866h5.065v16.31H13.794Z" transform="translate(-13.391 -270.215)" fill="#009aa7"/>
                                            <path id="Caminho_36562" data-name="Caminho 36562" d="M2.934,0A2.947,2.947,0,1,0,5.867,2.934,2.935,2.935,0,0,0,2.934,0Z" fill="#009aa7"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $c['twitter']; ?>" target="_blank" rel="noreferrer" title="Twitter V21">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" width="24.43" height="23.96">
                                            <g>
                                                <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                                    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                                    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                                    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                                    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                                    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                                    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                                    C480.224,136.96,497.728,118.496,512,97.248z" fill="#009aa7"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $c['youtube']; ?>" target="_blank" rel="noreferrer" title="YouTube V21">
                                        <svg height="682pt" viewBox="-21 -117 682.66672 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0"  fill="#009aa7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="item langs">
                                <?php
                                    if($_SESSION["language_id"] == 1) {
                                        echo '<span class="lang active" data-lang="1">PT</span>&nbsp;|&nbsp;<span class="lang" data-lang="2">EN</span>';
                                    } else {
                                        echo '<span class="lang" data-lang="1">PT</span>&nbsp;|&nbsp;<span class="lang active" data-lang="2">EN</span>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>