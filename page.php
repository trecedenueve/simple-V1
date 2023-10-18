<?php get_header(); ?>
<div class="container-fluid">
    <div class="main-page__page">
        <?php while(have_posts( )) : the_post();  ?>
        
        <section class="page__content">
            <span class="page__title">
                <h1 class="title__header"><?php the_title(); ?></h1>
            </span>
            
            <article class="page__the-content">
                <?php the_content();    ?>
            </article>
        
        </section>    
        
        <?php endwhile; ?>        
    </div>
</div>     
<?php get_footer(); ?>