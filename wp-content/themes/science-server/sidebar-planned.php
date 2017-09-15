<?php
/**
  * SideBar com Planned Improvements
  */

require_once 'helper.php';
?>
  <article class="tool-side-planned">
    <header class="side-header">
        <?php
            $cat_ID = get_cat_ID('Planned Improvements');
            $cat_name = get_cat_name( $cat_ID );
        ?>
      <h1>
          <?php echo $cat_name ?>
      </h1>
    </header>
    <div class="planned-box">
    <?php
        $ferramenta_da_pagina = get_ferramenta_slug($pagina_atual_id);
        $args = array(
            'post_type' => 'page',
            'category_name' => 'planned-improvements',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ferramenta',
                    'field'    => 'slug',
                    'terms'    => $ferramenta_da_pagina
                ),
            ),
        );
        $news_query = new WP_Query( $args );
        if ( $news_query->have_posts() ){
            while ( $news_query->have_posts() ) {
                $news_query->the_post();
                $version = get_release_note_version($post->ID);
                the_content();
            }
      }

    ?>
    </div>
  </article>
