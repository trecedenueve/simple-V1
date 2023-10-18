<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="main-container">
        <header class="main-container__header">
            <div class="header__header">
                <div class="header__logo">
                    <?php
                        if ( function_exists( 'the_custom_logo')) {
                            the_custom_logo( );
                        }
                    ?>
                </div>
                <div class="header__nav">
                        <button class="header__open-menu" id="abrir">&#9776</button>
                    <nav class="nav" id="nav">
                        <button class="header__close-menu" id="cerrar">X</button>
                            <?php wp_nav_menu( array( 
                                'theme_location' => 'primary',
                                'depth' => 1,
                                )); 
                            ?>
                    </nav>
                </div>
            </div>
            <?php if(is_archive()){
                ?>
                <div class="header__archive-title-container">
                <div class="archive-title-box">
                    <h1 class="archive-title"><?php the_archive_title();  ?></h1>
                    <h1 class="archive-subtitle"><?php the_archive_description();  ?></h2>
                </div>
            <?php } ?>
            
            </div><!-- END HEADER -->



