<?php
/**
 * The template for displaying Category pages
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
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->
			<section class="col-md-8">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="col-md-8 col-md-offset-2 category-post">
						<header class="category-post-header">
							<h1 class="category-post-title">
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</h1>
						</header>
						<div class="category-post-content">
							<?php the_content() ?>
						</div>
						<div class="category-separator"></div>
					</article>
				<?php endwhile; ?>

				<?php twentythirteen_paging_nav(); ?>
			</section>
			<?php get_sidebar('page') ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
