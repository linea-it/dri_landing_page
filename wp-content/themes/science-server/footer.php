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
                    <a href="http://www.capes.gov.br/">
                        <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/logo-capes_150x150_wbg.png'?>" alt="Logo capes">
                    </a>
                </div>
                <div class="logo">
                    <a href="http://cnpq.br/">
                        <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/logo-cnpq_150x150_wbg.png'?>" alt="Logo cnpq">
                    </a>
                </div>
                <div class="logo">
                    <a href="http://www.faperj.br/">
                        <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/logo_faperj_cor_250x250_wbg.jpg'?>" alt="Logo faperj">
                    </a>
                </div>
                <div class="logo">
                    <a href="http://www.finep.gov.br/">
                        <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/marca-finep_250x250_wbg.jpg'?>" alt="Logo finep">
                    </a>
                </div>
                <div class="logo">
                    <a href="http://www.linea.gov.br/010-ciencia/1-projetos/3-inct-do-e-universo-2/">
                        <img src="<?php  echo get_site_url() . '/wp-content/uploads/2017/11/e-universo_sans_01-136x136.png'?>" alt="Logo inct">
                    </a>
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
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
