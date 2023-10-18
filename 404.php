<?php
/**
 * If the page doesn´t exist, show 404 page (Not Found)
 */
?>
<?php get_header(); ?>
<div class="main-container__404">
    <section class="container-404"> 
        <article class="container-404__article">
            <div class="article__404-title">
                <?php _e( 'Not Found', 'simple' ); ?>
            </div>
            <div class="article__404-404">
                    404
            </div>           
        </article>
        <div class="redirect-404">
            <a href="<?php echo esc_url( home_url() ); ?>">Go back to main page</a>
        </div>
    </section>

<?php get_footer(); ?>
