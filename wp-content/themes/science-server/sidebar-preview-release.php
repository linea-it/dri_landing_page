<?php
/**
  * SideBar com Release Notes
  */

require_once 'helper.php';
?>
<section class="tool-side col-md-3">
  <article class="tool-side-notes">
    <header class="side-header">
        <?php
            $cat_ID = get_cat_ID('release notes');
            $cat_name = get_cat_name( $cat_ID );
        ?>
      <h1>
          Preview Releases
      </h1>
    </header>
    <div class="releases-box">
    <?php
        $ferramenta_da_pagina = get_ferramenta_slug($pagina_atual_id);
        $args = array(
            'post_type' => 'post',
            'category_name' => 'release-notes',
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
                ?>
                <a class="release-title-link" href="<?php the_permalink() ?>">
                  <h3>
                      <?php echo $version ?> -
                      <span class="release-date">
                          <?php echo get_the_date( 'F j, Y' ); ?>
                      </span>
                  </h3>
                </a>
                <?php
            }
      }

    ?>
    </div>
  </article>
</section>
