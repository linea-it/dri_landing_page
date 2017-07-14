<?php
/**
  * SideBar com News e Release Notes
  */
?>
<section class="tool-side col-md-2 col-md-offset-1">
  <article class="tool-side-news">
    <header class="side-header">
      <h2>News </h2><span><a class="more-link" href="<?php echo get_category_link( get_cat_ID('news') ) ?>">+ more News</a></span>
    </header>
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
            <p class="news-date"><em><?php the_time('F j, Y') ?></em></p>
          <?php
          $post_num++;
        }
      }

    ?>
  </article>
  <article class="tool-side-notes">
    <header class="side-header">
      <h2>Release Notes</h2><span><a class="more-link" href="<?php echo get_category_link( get_cat_ID('release notes') ) ?>">+ more Release Notes</a></span>
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
