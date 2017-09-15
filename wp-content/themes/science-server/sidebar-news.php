<?php
/**
  * SideBar com News
  */

require_once 'helper.php';
?>
<article class="home-side-news">
    <header class="side-header">
      <h1>
          News
      </h1>
    </header>
    <div class="news-box">
    <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'news',
            'posts_per_page' => -1
        );
        $news_query = new WP_Query( $args );
        if ( $news_query->have_posts() ){
            while ( $news_query->have_posts() ) {
                $news_query->the_post();
                ?>
                <a class="news-title-link" href="<?php the_permalink() ?>">
                  <h3><?php echo the_title() ?></h3>
                </a>
                <?php
            }
        }

    ?>
    </div>
</article>
