    <?php
        if($area != 'home' || $area != 'inscricoes') {
        ?>
            <footer id="footer">
                <div id="footer-bg-container">
                    <svg width="100%" id="footer-bg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1241.28">
                        <path fill="#009aa7" d="M1920,301.2c-23.9-7-48.2-12.3-73.3-16.2c-246.3-38.4-557,54.7-1098.5-125.3c-386.1-128.3-578.1-1-748.2,183v898.5h1920V301.2z"/>
                    </svg>

                    <svg id="white-path" xmlns="http://www.w3.org/2000/svg" width="519" height="325.484" viewBox="0 0 519 325.5">
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
                </div>
                <div class="content-wrapper">
                    <?php
                        $contactos_query = "SELECT * FROM contactos";
                
                        $result_contactos = mysqli_query($conn, $contactos_query);
                        $contactos = array();
                
                        while ($row_contactos = mysqli_fetch_assoc($result_contactos)) {
                            $contactos[] = $row_contactos;
                        }
                
                        foreach ($contactos as $c) {
                    ?>
                    <div class="area">
                        <div class="line top">
                            <div class="column left">
                                <div class="maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.9650483851556!2d-7.908830184345861!3d40.65270084917757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2337bc075e994d%3A0xd545869d9e155e1d!2sEdif%C3%ADcio%20Vissaium%20XXI!5e0!3m2!1spt-PT!2spt!4v1616096557468!5m2!1spt-PT!2spt" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="address">
                                    <span><strong><?php echo $c['title1']; ?></strong></span>
                                    <span><?php echo $c['coords1']; ?></span>
                                    <span><strong><?php echo $c['title2']; ?></strong></span>
                                    <span><?php echo $c['coords2']; ?></span>
                                </div>
                            </div>
                            <div class="column right">
                                <h4><?php echo translateTo('Onde nos pode encontrar'); ?></h4>
                                <div class="separator"></div>
                                <div class="contacts">
                                    <div class="left">
                                        <div>
                                            <span><strong><?php echo $c['title1']; ?></strong></span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13.238" height="18.276" viewBox="0 0 13.238 18.276">
                                                <g id="location-fill" transform="translate(-70.573)">
                                                    <g id="Grupo_1705" data-name="Grupo 1705" transform="translate(70.573)">
                                                        <path id="Caminho_3879" data-name="Caminho 3879" d="M77.192,0a6.626,6.626,0,0,0-6.619,6.619c0,4.529,5.923,11.179,6.176,11.46a.6.6,0,0,0,.887,0c.252-.281,6.176-6.93,6.176-11.46A6.627,6.627,0,0,0,77.192,0Zm0,9.949a3.33,3.33,0,1,1,3.33-3.33A3.334,3.334,0,0,1,77.192,9.949Z" transform="translate(-70.573 0)" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span><?php echo $c['morada1']; ?></span>
                                        </div>
                                        <div>
                                            <span>
                                                <strong>
                                                    <?php 
                                                        $title2 = $c['title2']; 
                                                        $part1 = explode('São', $title2)[0];
                                                        $part2 = explode('Rural', $title2)[1];
                                                    ?>
                                                    <?php echo $part1; ?>
                                                    <br>
                                                    <?php echo $part2; ?>
                                                </strong>
                                            </span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13.238" height="18.276" viewBox="0 0 13.238 18.276">
                                                <g id="location-fill" transform="translate(-70.573)">
                                                    <g id="Grupo_1705" data-name="Grupo 1705" transform="translate(70.573)">
                                                        <path id="Caminho_3879" data-name="Caminho 3879" d="M77.192,0a6.626,6.626,0,0,0-6.619,6.619c0,4.529,5.923,11.179,6.176,11.46a.6.6,0,0,0,.887,0c.252-.281,6.176-6.93,6.176-11.46A6.627,6.627,0,0,0,77.192,0Zm0,9.949a3.33,3.33,0,1,1,3.33-3.33A3.334,3.334,0,0,1,77.192,9.949Z" transform="translate(-70.573 0)" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>
                                                <?php 
                                                    $morada2 = $c['morada2']; 
                                                    $part1 = explode('Estrada', $morada2)[0];
                                                    $part3 = explode('3505-358', $morada2)[1];

                                                    $str = $c['morada2'];
                                                    $explode1 = explode('Cristóvão', $str);
                                                    $array = array();

                                                    foreach($explode1 as $key => $value) {
                                                    $explode2 = explode('São', $explode1[$key]);
                                                    array_push($array, $explode2[0]);
                                                    }
                                                ?>
                                                <?php echo $part1; ?>
                                                <br>
                                                <?php echo $array[1] ?>
                                                <br>
                                                <?php echo $part3; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div>
                                            <span><strong><?php echo translateTo('Contactos'); ?></strong></span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.783" height="11.616" viewBox="0 0 14.783 11.616">
                                                <g id="email" transform="translate(0 -59.013)">
                                                    <g id="Grupo_1703" data-name="Grupo 1703" transform="translate(0 59.013)">
                                                    <path id="Caminho_3872" data-name="Caminho 3872" d="M29.954,328.041a1.263,1.263,0,0,0,.865-.326l-4.188-4.188-.29.208q-.47.346-.763.54a4.7,4.7,0,0,1-.78.4,2.376,2.376,0,0,1-.908.2h-.016a2.375,2.375,0,0,1-.908-.2,4.689,4.689,0,0,1-.78-.4q-.293-.194-.763-.54l-.289-.21-4.189,4.19a1.264,1.264,0,0,0,.865.326Z" transform="translate(-16.491 -316.425)" fill="#ffffff"/>
                                                    <path id="Caminho_3873" data-name="Caminho 3873" d="M.833,199.273A4.374,4.374,0,0,1,0,198.555v6.372l3.692-3.692Q2.584,200.462.833,199.273Z" transform="translate(0 -194.81)" fill="#ffffff"/>
                                                    <path id="Caminho_3874" data-name="Caminho 3874" d="M416.174,199.273q-1.685,1.141-2.865,1.965l3.69,3.69v-6.373A4.552,4.552,0,0,1,416.174,199.273Z" transform="translate(-402.216 -194.81)" fill="#ffffff"/>
                                                    <path id="Caminho_3875" data-name="Caminho 3875" d="M13.469,59.013H1.326a1.178,1.178,0,0,0-.978.429,1.664,1.664,0,0,0-.342,1.072A1.928,1.928,0,0,0,.46,61.641a4.093,4.093,0,0,0,.965.953q.28.2,1.691,1.176c.508.352.949.659,1.329.923l.833.582.123.088.227.164q.268.194.445.314t.429.268a2.5,2.5,0,0,0,.474.223,1.313,1.313,0,0,0,.412.074h.016a1.313,1.313,0,0,0,.412-.074,2.5,2.5,0,0,0,.474-.223q.252-.149.429-.268t.445-.314l.227-.164.123-.088.835-.58,3.026-2.1a3.924,3.924,0,0,0,1.006-1.015,2.183,2.183,0,0,0,.4-1.246,1.331,1.331,0,0,0-1.32-1.32Z" transform="translate(-0.006 -59.013)" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span><a href="mailto:<?php echo $c['email']; ?>"><?php echo $c['email']; ?></a></span>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.6" height="16.601" viewBox="0 0 16.6 16.601">
                                                <g id="phone-fill" transform="translate(-0.006)">
                                                    <g id="Grupo_1704" data-name="Grupo 1704" transform="translate(0.006)">
                                                    <path id="Caminho_3876" data-name="Caminho 3876" d="M12.626,55.525a1.163,1.163,0,0,0-1.758,0c-.411.408-.822.815-1.226,1.23a.242.242,0,0,1-.339.062c-.266-.145-.549-.263-.8-.421a12.753,12.753,0,0,1-3.074-2.8,7.284,7.284,0,0,1-1.1-1.765.253.253,0,0,1,.062-.325c.411-.4.812-.8,1.216-1.213a1.168,1.168,0,0,0,0-1.8c-.321-.325-.643-.643-.964-.967s-.66-.667-.995-.995a1.171,1.171,0,0,0-1.758,0c-.415.408-.812.826-1.233,1.226a2,2,0,0,0-.629,1.351A5.723,5.723,0,0,0,.46,51.577,14.967,14.967,0,0,0,3.116,56a16.439,16.439,0,0,0,5.444,4.259,7.874,7.874,0,0,0,3.016.877,2.21,2.21,0,0,0,1.9-.722c.352-.394.75-.753,1.123-1.13A1.175,1.175,0,0,0,14.6,57.5Q13.618,56.508,12.626,55.525Z" transform="translate(-0.006 -44.544)" fill="#ffffff"/>
                                                    <path id="Caminho_3877" data-name="Caminho 3877" d="M241.6,100.912l1.275-.218A5.722,5.722,0,0,0,238.034,96l-.18,1.282a4.422,4.422,0,0,1,3.745,3.631Z" transform="translate(-229.638 -92.684)" fill="#ffffff"/>
                                                    <path id="Caminho_3878" data-name="Caminho 3878" d="M248.323,2.688A9.4,9.4,0,0,0,242.934,0l-.18,1.282a8.2,8.2,0,0,1,6.94,6.726l1.275-.218A9.468,9.468,0,0,0,248.323,2.688Z" transform="translate(-234.368)" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span><a href="tel:<?php echo $c['tlf']; ?>"><?php echo $c['tlf']; ?></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="line mid">
                            <div class="socials">
                                <div class="social">
                                    <a href="<?php echo $c['facebook']; ?>" target="_blank" rel="noreferrer" title="Facebook V21">
                                        <svg id="_003-facebook" data-name="003-facebook" xmlns="http://www.w3.org/2000/svg" width="13.138" height="23.414" viewBox="0 0 13.138 23.414">
                                            <g id="Grupo_1283" data-name="Grupo 1283" transform="translate(0)">
                                                <path id="Caminho_1205" data-name="Caminho 1205" d="M8.211,8.049V5.122A1.561,1.561,0,0,1,9.854,3.658H11.5V0H8.211A4.681,4.681,0,0,0,3.285,4.39V8.049H0v3.658H3.285V23.414H8.211V11.707H11.5l1.642-3.658Z" fill="#ffffff"/>
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
                                                        <path id="Caminho_1209" data-name="Caminho 1209" d="M17,0H6.96A6.968,6.968,0,0,0,0,6.96V17a6.968,6.968,0,0,0,6.96,6.96H17A6.968,6.968,0,0,0,23.96,17V6.96A6.968,6.968,0,0,0,17,0Zm5.088,17A5.094,5.094,0,0,1,17,22.088H6.96A5.094,5.094,0,0,1,1.872,17V6.96A5.094,5.094,0,0,1,6.96,1.872H17A5.094,5.094,0,0,1,22.088,6.96Z" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                                <g id="Grupo_1287" data-name="Grupo 1287" transform="translate(5.522 5.522)">
                                                    <g id="Grupo_1286" data-name="Grupo 1286">
                                                        <path id="Caminho_1210" data-name="Caminho 1210" d="M6.458,0a6.458,6.458,0,1,0,6.458,6.458A6.465,6.465,0,0,0,6.458,0Zm0,11.044a4.586,4.586,0,1,1,4.586-4.586A4.591,4.591,0,0,1,6.458,11.044Z" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                                <g id="Grupo_1289" data-name="Grupo 1289" transform="translate(17.596 4.493)">
                                                    <g id="Grupo_1288" data-name="Grupo 1288">
                                                        <ellipse id="Elipse_91" data-name="Elipse 91" cx="0.936" cy="0.936" rx="0.936" ry="0.936" fill="#ffffff"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $c['linkedin']; ?>" target="_blank" rel="noreferrer" title="LinkedIn V21">
                                        <svg id="linkedin_1_" data-name="linkedin (1)" xmlns="http://www.w3.org/2000/svg" width="24.43" height="23.96" viewBox="0 0 24.43 23.96">
                                            <path id="Caminho_36560" data-name="Caminho 36560" d="M311.483,280.548h.006v-8.96c0-4.383-.944-7.76-6.068-7.76a5.32,5.32,0,0,0-4.791,2.633h-.071v-2.224H295.7v16.31h5.059v-8.076c0-2.126.4-4.183,3.036-4.183,2.595,0,2.633,2.427,2.633,4.319v7.941Z" transform="translate(-287.059 -256.588)" fill="#ffffff"/>
                                            <path id="Caminho_36561" data-name="Caminho 36561" d="M13.794,277.866h5.065v16.31H13.794Z" transform="translate(-13.391 -270.215)" fill="#ffffff"/>
                                            <path id="Caminho_36562" data-name="Caminho 36562" d="M2.934,0A2.947,2.947,0,1,0,5.867,2.934,2.935,2.935,0,0,0,2.934,0Z" fill="#ffffff"/>
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
                                                    C480.224,136.96,497.728,118.496,512,97.248z" fill="#ffffff"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $c['youtube']; ?>" target="_blank" rel="noreferrer" title="YouTube V21">
                                        <svg viewBox="-21 -117 682.66672 682" xmlns="http://www.w3.org/2000/svg" width="24.43" height="23.96">
                                            <path d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0"  fill="#ffffff"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="links">
                                <a title="Política de Privacidade V21" href="/politica-privacidade"><?php echo translateTo('Política de Privacidade'); ?></a>
                                <span>|</span>
                                <a title="Livro de Reclamações" href="https://www.livroreclamacoes.pt/inicio" target="_blank" rel="noreferrer"><?php echo translateTo('Livro de Reclamações'); ?></a>
                            </div>
                            <div class="displacement"></div>
                        </div>
                        <div class="line bottom">
                            <span>Copyright © <?php echo date('Y');?> VISSAIUM. <?php echo translateTo('Todos os direitos reservados'); ?></span>
                            <span><strong>POWERED BY <a title="TwoBe Creative" href="https://www.twobecreative.pt" target="_blank" rel="noreferrer">TWOBE CREATIVE</a></strong></span>
                            
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </footer>
        <?php
        }
    ?>

    <div id="gdpr-box" class="cookie-bar">
        <p>
            Este site utiliza cookies para lhe fornecer uma experiência de utilizador melhorada. Ao usar este site, está a aceitar a nossa
            <a href="/politica-privacidade" target="_blank">Política de Privacidade</a>.
        </p>
        <button class="gdpr-button-accept">Aceitar cookies</button>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <script src="/js/jquery-visible/jquery.visible.min.js"></script>
    <script src="/js/lazysizes.min.js" async></script>
    <script src="/js/main.min.js"></script>
    <script src="/js/resize.min.js"></script>

    <?php
        if($area == 'home'){
            echo '<script src="/js/slideshow.min.js"></script>';
        }
        if($area == 'incubacao' || $area == 'programas-projetos'){
            echo '<script src="/js/galeria.min.js"></script>';
        }

        if($area == 'programas-projetos'){
            echo '<script src="/js/testemunhos.min.js"></script>';
        }

        if($area == 'noticias' || isset($pathinfo[2])){
            echo '<script src="/js/gallery-slider.min.js"></script>';
        }

        if($area == 'atualidade'){ //change to 1 when online
            echo '<script src="/js/noticias-filter.min.js"></script>';
        }

        if($area == 'base-rural' || $area == 'v21'){
            echo '<script src="/js/form-geral.min.js"></script>';
        }

        if($area == 'contactos'){
            echo '<script src="/js/contactos.min.js"></script>';
        }

        if($area == 'incubadora-de-base-rural'){
            echo '<script src="/js/form-geral.js"></script>';
        }

        if($area == 'v21-centro-de-incubacao-tecnologico-de-viseu'){
            echo '<script src="/js/form-geral.js"></script>';
        }
    ?>
</body>

</html>