<?php
/**
  * SideBar com News e Release Notes
  */
?>
<section class="tool-side col-md-3">
  <article class="tool-side-notes">
    <header class="side-header">
      <h1>Release Notes</h1><span><a class="more-link" href="<?php echo get_category_link( get_cat_ID('release notes') ) ?>">+ more Release Notes</a></span>
    </header>
    <?php
      $news_query = new WP_Query( array('category_name' => 'release-notes', 'posts_per_page' => 4) );
      if ( $news_query->have_posts() ){
        while ( $news_query->have_posts() ) {
          $news_query->the_post();
          ?>
            <a class="release-title-link" href="<?php the_permalink() ?>">
              <h3><?php echo the_title() ?></h3>
            </a>
          <?php
        }
      }

    ?>
  </article>
</section>
