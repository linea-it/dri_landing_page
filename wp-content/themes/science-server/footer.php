<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
            <section class="logos-apoio">
                <div class="logo">
                    <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/logo-capes_150x150_wbg.png'?>" alt="Logo capes">
                </div>
                <div class="logo">
                    <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/logo-cnpq_150x150_wbg.png'?>" alt="Logo cnpq">
                </div>
                <div class="logo">
                    <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/logo_faperj_cor_250x250_wbg.jpg'?>" alt="Logo faperj">
                </div>
                <div class="logo">
                    <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/marca-finep_250x250_wbg.jpg'?>" alt="Logo finep">
                </div>
                <div class="logo">
                    <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/e-universo_sans_01-136x136.png'?>" alt="Logo inct">
                </div>
            </section>
            <section class="social-logos">
                <h2 class="social-title">Follow us</h2>
                <a href="https://www.youtube.com/user/lineamcti">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/LIneA_mcti">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://github.com/linea-it/dri">
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a>
            </section>
			<div class="site-info">
				<a href="http://www.linea.gov.br">Powered by
					<img src="<?php echo get_site_url() . '/wp-content/uploads/2017/07/logo-header.png' ?>">
				</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
