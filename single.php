<?php
get_header();
?>

    <div class="main-single">
        <?php
        if (have_posts()) : 
            while( have_posts( )) : the_post(  );
                ?>
        <section class="single__container">
            <article class="single__container-box">
                <div class="single__single-title">
                    <h1 class="single__title-icon"><?php the_title( ); ?></h1>
                    <span class="single__author-date">Escrito por <?php the_author_posts_link( );  ?> 
                        en  <?php echo get_the_time( 'd.m.Y'); ?>
                    </span>

                
                <div class="single__cathegory-container">
                    <span class="single__cathegory">
                        Archivado en:
                        <?php echo get_the_category_list( ', ');  ?>
                    </span>
                </div>
                </div>
                
                <div class="single__thumbnail">
                    <?php if (has_post_thumbnail( )) { ?>
                        <?php 
                            $atrr = '<class="single__thumbnail-img">';
                            the_post_thumbnail('large', $atrr); ?>
                        <?php }else{
                            ?> 
                            <div class="single__thumbnail-no-img"></div>
                        <?php } ?>
                </div>
        
                <div class="single__content">
                    <?php the_content( ); ?>
                </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="single__more-post">
                    <?php the_post_navigation(  ); ?>
                </div>
            </article>
        
            

        </section>
            <div class="single__comments">

                <?php // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        ?>
                        <div class="single__respond">
                            <?php comments_template(); ?>
                       
                            <?php }else{

                            ?>
                        <div class="single__respond-empty">
                        
                            <h3><?php comments_template(); ?></h3>
                        </div>    
                            <?php } ?>
                        </div>
            </div>
        </div></div>
<?php get_footer(); ?>