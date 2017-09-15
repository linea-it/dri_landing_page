<?php

get_header();

require_once 'helper.php';
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content row" role="main">
			<section class="tool-content col-md-8">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
                        <?php
                        if (in_category('release-notes')):
                            $ferramenta = get_ferramenta($post->ID);
                            $release_version = get_release_note_version(get_the_ID());
                            ?>
                                <h1 class="entry-title"><?php echo $ferramenta ?>: Release Note</h1>
                                <h2 class="release-title-version">Version: <?php echo $release_version ?></h2>
                            <?php
                        else:
                            ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <?php
                        endif;
                        ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			<?php endwhile; ?>
			</section>
			<?php
                if (in_category('release-notes')):
                    require_once 'sidebar-preview-release.php';
                endif;
            ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
