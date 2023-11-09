<?php
$area = "contatos";
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
        <h1><?php echo translateTo('Contactos'); ?></h1>
    </div>
</div>

<div class="content-wrapper">
    <div class="area">
        <div class="contact-form">
            <svg xmlns="http://www.w3.org/2000/svg" width="508.946" height="471.41" viewBox="0 0 508.946 471.41">
                <path id="Caminho_3766" data-name="Caminho 3766" d="M1397,1826.381s20.407,60.465,131.51,98.255c-3.023,0,40.813,14.36,104.3-11.337,1.512,0,151.161-44.781,258.486,105.624-.756-2.267,149.246,390.182-494.3,247.71C1397.212,2266.752,1397,1826.381,1397,1826.381Z" transform="translate(-1397.004 -1826.381)" fill="#f4f5fa"/>
            </svg>

            <div class="container">
                <h2><?php echo translateTo('Contacte-nos'); ?></h2>
                <div class="form">
                    <form id="contact">
                        <div class="form-group full oneline">
                            <label for="contact-name"><?php echo translateTo('Nome: *'); ?></label>
                            <input type="text" name="contact-name" id="contact-name">
                        </div>
                        <div class="form-group full oneline">
                            <label for="contact-email"><?php echo translateTo('E-mail: *'); ?></label>
                            <input type="email" name="contact-email" id="contact-email">
                        </div>
                        <div class="form-group full oneline">
                            <label for="contact-phone"><?php echo translateTo('Contato:'); ?></label>
                            <input type="tel" name="contact-phone" id="contact-phone">
                        </div>
                        <div class="form-group full oneline">
                            <label for="contact-subject"><?php echo translateTo('Assunto: *'); ?></label>
                            <input type="text" name="contact-subject" id="contact-subject">
                        </div>
                        <div class="form-group full textarea">
                            <label for="contact-msg"><?php echo translateTo('Mensagem: *'); ?></label>
                            <textarea name="contact-msg" id="contact-msg" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group two-third bottom accept-tc">
                            <label class="check"><?php echo translateTo('Confirmo que li e aceito a '); ?><a href="/politica-privacidade" target="_blank"><?php echo translateTo('Política de Privacidade'); ?></a> <?php echo translateTo('da Vissaium XXI'); ?>. 
                                <input id="accept-pp" type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <span class="erro accept-pp"></span>
                        </div>
                        <div class="form-group third bottom submit-btn">
                            <div id="submit" class="cta-cont">
                                <div class="cta">
                                    <div class="txt"><?php echo translateTo('Enviar »'); ?></div>
                                </div>
                            </div>
                            <span class="erro submit"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "include/footer.php";
?>