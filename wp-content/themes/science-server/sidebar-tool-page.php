<?php
/**
  * SideBar com News e Release Notes
  */
?>
<section class="tool-side col-md-3">
  <article class="tool-side-news">
    <?php
      $news_query = new WP_Query( array('category_name' => 'news', 'post_type' => 'page') );
      if ( $news_query->have_posts() ){
        while ( $news_query->have_posts() ) {
          $news_query->the_post();
          ?>
          <header class="side-header">
              <h1><?php the_title() ?></h1>
          </header>
            <div class="news-content"><?php echo the_content() ?></div>
            <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
          <?php
        }
      }

    ?>
  </article>
  <article class="tool-side-improvements">
    <?php
      $news_query = new WP_Query( array('category_name' => 'improvements', 'post_type' => 'page') );
      if ( $news_query->have_posts() ){
        while ( $news_query->have_posts() ) {
          $news_query->the_post();
          ?>
          <header class="side-header">
          <h1><?php the_title() ?></h1>
          </header>
          <div class="improvements-content"><?php echo the_content() ?></div>
            <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
          <?php
        }
      }

    ?>
  </article>
  <article class="tool-side-notes">
    <header class="side-header">
      <h1>Release Notes</h1><span><a class="more-link" href="<?php echo get_category_link( get_cat_ID('release notes') ) ?>">+ more Release Notes</a></span>
    </header>
    <?php
      $news_query = new WP_Query( array('category_name' => 'release-notes') );
      $limite_posts = 4;
      $post_num = 1;
      if ( $news_query->have_posts() ){
        while ( $post_num <= $limite_posts && $news_query->have_posts() ) {
          $news_query->the_post();
          ?>
            <a class="release-title-link" href="<?php the_permalink() ?>">
              <h3><?php echo the_title() ?></h3>
            </a>
          <?php
          $post_num++;
        }
      }

    ?>
  </article>
</section>
