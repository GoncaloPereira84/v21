<div id="bg-galeria">
    <div class="close-pic">
        <div class="icon">
            <div class="line"></div>
            <div class="line"></div>
        </div>
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
                <img class="<?php echo $gf['img_align'] ?>" src="<?php echo $gf['img_src'] ?>" alt="Imagem <?php echo $gf['title'] ?>">
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