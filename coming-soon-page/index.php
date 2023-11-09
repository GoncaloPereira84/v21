<?php
$area = "home";
include "include/header.php";
?>

<div class="wrapper">


<div id="coming-soon">

    <img id="path" src="<?php echo IMG_PATH ?>/path.svg" alt="path">
    <img id="dots" src="<?php echo IMG_PATH ?>/dots.svg" alt="dots">
    <img id="spot" src="<?php echo IMG_PATH ?>/gray-spot.png" alt="spot">
    <div class="container">
        <div id="logo">
            <img src="<?php echo IMG_PATH ?>/logo.png" alt="Logo Vissaium XXI">
        </div>
        <div id="title">
            Disponível Brevemente
        </div>
        <div id="loader">
            <div class="container">
                <div id="progressbar">
                    <div id="blue">
                        <div id="percentage">0%</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="subtitle">
            Receba notificação assim que o site estiver concluído!
        </div>
        <div id="email-register">
            <div class="container">
                <div id="email-notif">
                    <input type="email" name="email-notif" placeholder="Inserir E-mail">
                </div>
                <div class="btn">
                    <div class="txt">
                        Registar
                    </div>
                    <div class="arrow">
                        <img src="<?php echo IMG_PATH ?>/right-arrow.svg" alt="Ícone seta">
                    </div>
                </div>
            </div>
            <span class="error"></span>
        </div>
        <div id="bottom">
            <div>
                <div id="socials">
                    <div class="icon">
                        <a href="https://www.facebook.com/vissaiumxxi/" target="_blank" rel="noreferrer" title="Facebook Vissaium XXI">
                            <img src="<?php echo IMG_PATH ?>/fb.svg" alt="Ícone Facebook">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="https://www.instagram.com/vissaiumxxi/" target="_blank" rel="noreferrer" title="Instagram Vissaium XXI">
                            <img src="<?php echo IMG_PATH ?>/ig.svg" alt="Ícone Instagram">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="https://www.linkedin.com/in/centro-de-incuba%C3%A7%C3%A3o-tecnol%C3%B3gica-de-viseu-a67359195/" target="_blank" rel="noreferrer" title="LinkedIn Vissaium XXI">
                            <img src="<?php echo IMG_PATH ?>/linkedin.svg" alt="Ícone LinkedIn">
                        </a>
                    </div>
                </div>
                <div id="address">
                    <img src="<?php echo IMG_PATH ?>/location.svg" alt="Ícone localização">
                    <div class="txt">
                        Edifício Vissaium XXI
                        <br>
                        Rua Dr. Luís Nava
                        <br>
                        3500-846 Viseu
                        <br>
                        40.652797,-7.906550
                    </div>
                </div>
            </div>
            <div>
                <div id="email">
                    <img src="<?php echo IMG_PATH ?>/email.svg" alt="Ícone e-mail">
                    <div class="txt">
                        <a href="mailto:geral@v21.pt">geral@v21.pt</a>
                    </div>
                </div>
                <div id="phone">
                    <img src="<?php echo IMG_PATH ?>/phone.svg" alt="Ícone telefone">
                    <div class="txt">
                        <a href="tel:+351232436474">+351 232 436 474</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="txt">
            <span>Copyright © 2020 VISSAIUM. Todos os direitos reservados</span>
            <span class="twobecreative">POWERED BY <a href="https://www.twobecreative.pt" target="_blank" rel="noreferrer" title="Site TwoBe Creative">TWOBE CREATIVE</a></span>
        </div>
    </div>
</footer>
</div>

<?php
include "include/footer.php";
?>