<?php
$estiloPagina = 'empresas.css';
require_once 'header.php';
?>
    <form action="#" class="container-site formulario-pesquisa-paises">
        <h2>Filiais em muitos países</h2>
        <select name="paises" id="paises">
            <option value="">--Selecione--</option>
            <?php
            $paises = get_terms(array('taxonomy' => 'paises'));
            foreach ($paises as $pais):?>
                <option value="<?= $pais->name ?>"
                    <?= !empty($_GET['paises']) && $_GET['paises'] === $pais->name ? 'selected' : '' ?>> <?= $pais->name ?></option>
            <?php endforeach;
            ?>
        </select>
        <input type="submit" value="Pesquisar">
    </form>

<?php
if (!empty($_GET['paises'])) {
    $paisSelecionado = array(array(
        'taxonomy' => 'paises',
        'field' => 'name',
        'terms' => $_GET['paises']
    ));
}

$args = array(
    'post_type' => 'empresas',
    'tax_query' => !empty($_GET['paises']) ? $paisSelecionado : ''

);

$query = new WP_Query($args);
if ($query->have_posts()):
    echo '<main class="page-empresas">';
    echo '<ul class="lista-empresas container-site">';
    while ($query->have_posts()): $query->the_post();
        echo '<li class="col-md-3 empresas" >';
        the_post_thumbnail();
        the_title('<p class="titulo-empresa">', '</p>');
        the_content();
        echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</main>';
endif;
require_once 'footer.php';