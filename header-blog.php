<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema Cero</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="main-container">
        <header class="main-container__header-blog">
            <div class="header-blog__the-container">

           
            <?php if ( get_header_image() ) : ?>
                <img class="header-blog__header-image" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                
                <div class="header__logo-blog">
                    <?php
                        if ( function_exists( 'the_custom_logo')) {
                            the_custom_logo( );
                        }
                    ?>
                </div>

            <span class="header__header-blog">
                    
                    <?php 
                            if(single_post_title());

                                if(is_category()){
                                    single_cat_title();
                                }elseif(is_tag()){
                                    single_tag_title();
                                }elseif(is_author()){
                                    echo get_the_author();
                                }
                                
                            endif;
                        ?>
 
                </span>

                <div class="header__nav-blog">
                        <button class="header__open-menu" id="abrir">&#9776</button>
                    <nav class="nav" id="nav">
                        <button class="header__close-menu" id="cerrar">X</button>
                            <?php wp_nav_menu( array( 
                                'theme_location' => 'primary',
                                )); 
                            ?>
                    </nav>
                    </div>
                </div>
            </div>
        </header><!-- END HEADER -->