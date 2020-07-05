<?php
$estiloPagina = 'empresas.css';
require_once 'header.php';

$args = array('post_type' => 'empresas' );
$query = new WP_Query($args);
if ($query->have_posts()):
    echo '<main class="page-empresas">';
    echo '<ul class="lista-empresas container-site">';
    while($query->have_posts()): $query->the_post();
        echo '<li class="col-md-3 empresas" >';
        the_post_thumbnail();
        the_title('<p class="titulo-empresa">','</p>');
        the_content();
        echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</main>';
endif;
require_once 'footer.php';