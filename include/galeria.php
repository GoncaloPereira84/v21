<div id="bg-galeria">
    <div class="close-pic">
        <div class="icon">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    
    <div class="nav prev">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 15px; height: auto; transform: rotate(180deg);" viewBox="0 0 4.743 7.308">
            <defs>
                <clipPath id="a">
                    <rect width="4.743" height="7.308" fill="none"></rect>
                </clipPath>
            </defs>
            <g clip-path="url(#a)">
                <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#0babc5"></path>
            </g>
        </svg>
    </div>
    <div class="nav next">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 15px; height: auto;" viewBox="0 0 4.743 7.308">
            <defs>
                <clipPath id="a">
                    <rect width="4.743" height="7.308" fill="none"></rect>
                </clipPath>
            </defs>
            <g clip-path="url(#a)">
                <path d="M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z" transform="translate(0 7.308) rotate(-90)" fill="#0babc5"></path>
            </g>
        </svg>
    </div>
</div>

<div id="galeria">
    <h2><?php echo translateTo('Galeria'); ?></h2>
    <div class="line"></div>
    <div class="filters">
        <?php
            $galeria_categorias_query = "SELECT * FROM galeria_categorias";

            $result_galeria_categorias = mysqli_query($conn, $galeria_categorias_query);
            $galeria_categorias = array();

            while ($row_galeria_categorias = mysqli_fetch_assoc($result_galeria_categorias)) {
                $galeria_categorias[] = $row_galeria_categorias;
            }

            foreach ($galeria_categorias as $gc) {
        ?>
        <div class="filter <?php echo $gc['id'] == 1 ? 'active' : '' ?>" data-filter-id="<?php echo $gc['id'] ?>"><?php echo $gc['title'] ?></div>
        <?php
            }
        ?>
    </div>
    <div class="pictures">
        <?php
            $galeria_fotos_query = "SELECT * FROM galeria_fotos ORDER BY id DESC";

            $result_galeria_fotos = mysqli_query($conn, $galeria_fotos_query);
            $galeria_fotos = array();

            while ($row_galeria_fotos = mysqli_fetch_assoc($result_galeria_fotos)) {
                $galeria_fotos[] = $row_galeria_fotos;
            }

            foreach ($galeria_fotos as $gf) {
        ?>
        <div class="picture" data-filter-id="<?php echo $gf['categoria_id'] ?>">
            <img class="<?php echo $gf['img_align'] ?>" src="<?php echo $gf['img_src'] ?>" alt="Imagem <?php echo $gf['title'] ?>">
            <img class="zoomed" src="<?php echo $gf['img_src'] ?>" alt="Imagem <?php echo $gf['title'] ?>">
        </div>
        <?php
            }
        ?>
    </div>

    <div class="filter-no-item"><span style="margin-top: 20px;">Não há fotos que correspondam ao filtro selecionado.</span></div>
    <div class="filter-mask"><span style="margin-top: 20px;">A carregar...</span></div>
</div>

<div id="galeria-mobile">
    <h2><?php echo translateTo('Galeria'); ?></h2>
    <div class="line"></div>
    <div class="filters">
        <?php
            $galeria_categorias_query = "SELECT * FROM galeria_categorias";

            $result_galeria_categorias = mysqli_query($conn, $galeria_categorias_query);
            $galeria_categorias = array();

            while ($row_galeria_categorias = mysqli_fetch_assoc($result_galeria_categorias)) {
                $galeria_categorias[] = $row_galeria_categorias;
            }

            foreach ($galeria_categorias as $gc) {
        ?>
        <div class="filter <?php echo $gc['id'] == 1 ? 'active' : '' ?>" data-filter-id="<?php echo $gc['id'] ?>"><?php echo $gc['title'] ?></div>
        <?php
            }
        ?>
    </div>
    <div class="pictures">
        <?php
            $galeria_fotos_query = "SELECT * FROM galeria_fotos ORDER BY id DESC";

            $result_galeria_fotos = mysqli_query($conn, $galeria_fotos_query);
            $galeria_fotos = array();

            while ($row_galeria_fotos = mysqli_fetch_assoc($result_galeria_fotos)) {
                $galeria_fotos[] = $row_galeria_fotos;
            }

            foreach ($galeria_fotos as $gf) {
        ?>
        <div class="picture" data-filter-id="<?php echo $gf['categoria_id'] ?>">
            <div class="content">
                <img src="<?php echo $gf['img_src'] ?>" alt="Imagem <?php echo $gf['title'] ?>">
                <img class="zoomed" src="<?php echo $gf['img_src'] ?>" alt="Imagem <?php echo $gf['title'] ?>">
            </div>
        </div>
        <?php
            }
        ?>
    </div>

    <div class="filter-no-item"><span style="margin-top: 20px;">Não há fotos que correspondam ao filtro selecionado.</span></div>
    <div class="filter-mask"><span style="margin-top: 20px;">A carregar...</span></div>
</div>