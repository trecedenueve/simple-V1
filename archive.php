<?php get_header(); ?>



<?php
get_header( );
?>
<div class="main-blog">
    <section class="blog__container">
        <?php
        if (have_posts()) : 
            while( have_posts( )) : the_post( );
            ?>
                <article class="container__blog-content-box">
                    
                        <?php if (has_post_thumbnail(  )) {  ?>
                            <div class="blog-content-box__thumbnail">
                                <a href="<?php the_permalink( ); ?>">
                                    <?php the_post_thumbnail(  ); ?>
                                </a>
                            </div>
                        <?php }else{  ?>
                                <div class="blog-content-box__thumbnail-no"></div>
                            <?php } ?>
                                
                   
                    
                    <div class="blog-content-box__blog-content">
                        <div class="blog-content__title">
                            <a href="<?php the_permalink(); ?>" class="blog-content__link">
                                <h2 class="blog-content__link-title">
                                    <i class="fa-solid fa-check"> </i>
                                    <?php the_title( ); ?></h2></a> 
                        </div>
                        
                        <div class="blog-content__details">Escrito por <?php the_author_posts_link( );  ?> en  <?php echo get_the_time( 'd.m.Y'); ?></div>
                        <div class="blog-content__category">Archivado en: <?php echo get_the_category_list( ', ');  ?></div>
                        

                        
                    <div class="blog-content__the-content">
                        <?php if( has_excerpt() ) {
                                        echo get_the_excerpt( );
                                    }else{
                                        echo wp_trim_words( get_the_content(), 50 );
                                    } ?>
                        <div class="the-content__read-more">
                            <a href="<?php the_permalink( ); ?>" class="the-content__cotinue-reading">Seguir Leyendo ...</a>
                        </div>
                    </div> 
                </article> 
            <?php endwhile; ?>
            <?php endif; ?>         
    </section>
    
    <section class="blog-container__navigation">
            <?php echo paginate_links();    ?>
    </section> 
</div>

<?php get_footer( ); ?>