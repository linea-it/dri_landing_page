<?php
/**
  * SideBar com News e Release Notes
  */
?>
<section class="tool-side col-md-2 col-md-offset-1">
  <article class="tool-side-news">
    <h2>News</h2>
    <?php
      $news_query = new WP_Query( array('category_name' => 'news') );
      $limite_posts = 3;
      $post_num = 1;
      if ( $news_query->have_posts() ){
        while ( $post_num <= $limite_posts && $news_query->have_posts() ) {
          $news_query->the_post();
          if ( has_post_thumbnail() ) {
            $image = wp_get_attachment_image_src (
              get_post_thumbnail_id( $post->ID ),
              'post-thumbnail'
            );
          }
          ?>
            <div class="thumbnail-container">
              <img class="news-thumbnail" src="<?php echo $image[0] ?>" alt="post-thumbnail">
            </div>
            <a class="news-title-link" href="<?php the_permalink() ?>">
              <h5 class="news-title"><?php echo the_title() ?></h5>
            </a>
            <p class="news-date"><em><?php the_time('j \d\e F, Y') ?></em></p>
          <?php
          $post_num++;
        }
      }

    ?>
  </article>
  <article class="tool-side-notes">
    <h2>Release Notes</h2>
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
