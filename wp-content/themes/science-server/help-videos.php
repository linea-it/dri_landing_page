<?php
/*
Template Name: help-videos
*/
?>

<?php
get_header();
require 'help-videos-functions.php';
require 'ytb_functions.php';
?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

                <article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="help-videos-container row">
                        <section class="videos-lista col-md-4">
                        <?php
                            $json = file_get_contents("https://desportal.cosmology.illinois.edu/dri/api/tutorial/?format=json");
                            $obj = json_decode($json);
                            $categorias = get_categorias($obj);
                            ?>
                            <div id="accordion">
                            <?php
                            foreach ($categorias as $categoria) {
                                $videos = get_itens_por_categoria($obj, $categoria);
                                ?>
                                <h3><?php echo $categoria ?></h3>
                                <div>
                                <?php
                                foreach ($videos as $video) {
                                    ?>
                                    <p class="video-item" data-idytb="<?php echo getID($video->ttr_src); ?>" onclick="showVideo(event)">
                                        <?php echo $video->ttr_title ?>
                                    </p>
                                    <?php
                                }
                                ?>
                                </div>
                                <?php
                            }
                        ?>
                            </div>
                        </section>
                        <section class="col-md-8 video-container">
                            <div class="panel panel-default video-panel">
                                <div class="panel-heading">
                                    <h2 id="video-title">Select the video</h2>
                                </div>
                                <div class="panel-body">
                                    <iframe id="ytb-frame" src="" width="420" height="315">
                                    </iframe>
                                </div>
                            </div>
                        </section>
                    </div><!-- .entry-content -->

                    <footer class="entry-meta">
                        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-meta -->
                </article><!-- #post -->
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
