<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
    <div id="content" class="site-content row" role="main">
    <?php if ( have_posts() ) : ?>

        <?php // Retrieve only Pages and exclude About, links, contact, etc.
            $args = array(       // set up arguments
                'post_type' => 'page',
                'category_name' => 'tool-page',
                'posts_per_page' => -1
            );
            query_posts($args);   // execute the arguments
        ?>
        <section class="tools-section col-md-12">
            <?php /* The loop */ ?>
            <ul class="tool-box-container">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <?php
                            global $post;
                            $slug = $post->post_name;
                        ?>
                        <li class="tool-box <?php echo $slug; ?>">
                            <a href="<?php echo get_the_excerpt() ?>">
                                <div class="tool-box-img">
                                <?php the_post_thumbnail(); ?>
                                </div>
                                <h2 class="tool-box-title"><?php the_title(); ?></h2>
                            </a>
                            <a class="readme-tool-link" href="<?php the_permalink(); ?>">More</a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        </section>

    <?php else : ?>
    	<?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    <!--
        <section class="sidebar-news-section col-md-3 col-md-offset-1">
            <?php get_sidebar('news') ?>
        </section>
    -->
    </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
