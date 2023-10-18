<?php
get_header( );
?>
    <div class="main__front-page">
            <div class="front-page__container">

         
            <?php
            while (have_posts( )) : the_post();
                the_content();
            endwhile;
            ?>

<?php get_footer( ); ?>