<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content row" role="main">
			<?php /* The loop */ ?>
			<?php
                while ( have_posts() ) : the_post();
                $pagina_atual_id = $post->ID;
            ?>
            <?php if (in_category('tool-page') || in_category('release-notes')) : ?>
            <section class="tool-content col-md-8">
            <?php else: ?>
            <section class="tool-content col-md-8 col-md-offset-2">
            <?php endif; ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header tool-page-header">
                        <?php if (in_category('tool-page')) : ?>
                            <a href="<?php echo get_the_excerpt() ?>" target="_blank">
                                <h1 class="entry-title">Go to <?php the_title(); ?></h1>
                            </a>
                        <?php else: ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>
			</section>
            <?php
                if (in_category('tool-page')):
                ?>
                <section class="tool-side col-md-3">
                <?php
                    require_once 'sidebar-release-notes.php';
                    require_once 'sidebar-planned.php';
                ?>
                </section>
                <?php
                endif;
            ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
