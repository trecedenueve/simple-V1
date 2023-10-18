<?php 
/*
Template Name: sidebar izquierda
*/
?>
<?php get_header(); ?>
<div class="container__left-sidebar">
        <!-- left sidebar -->
        <aside class="sidebar-left__sidebar">
            <?php if( is_active_sidebar( 'sidebar' ))   ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
        </aside><!-- end sidebar -->
        
        <section class="sidebar-left__main-content">
            <article class="main-content__loop">
                <?php while(have_posts( )) : the_post();  ?>
                    <div class="main-content__title">
                        <h1><?php the_title();  ?></h1>
                    </div>
                    
                    <div class="main-content__content">
                        <?php the_content();    ?>
                    </div>
                <?php   
                endwhile;
                ?>
            </article>
        </section><!-- end main content -->


<?php get_footer(); ?>