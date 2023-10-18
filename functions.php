<?php
/* =============================================================================
* MOSTRAR BARRA DEL ADMIN
 ===============================================================================*/
add_action( "show_admin_bar", "__return_false");


/* =============================================================================
* REGISTRANDO CSS, JAVASCRIPT & FONTS
 =============================================================================== */
function eqe_styles() {
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize-min.css', '', '8.0.1', 'all');
    wp_enqueue_style( 'normalize');

    wp_register_style('reseteo', get_template_directory_uri() . '/css/reseteo.css', '', '1.0', 'all');
    wp_enqueue_style('reseteo');

    wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', '', '1.1', 'all');
    wp_enqueue_style('style');

    wp_register_style('the-queries', get_template_directory_uri() . '/css/the-queries.css', '', '1.0', 'all');
    wp_enqueue_style('the-queries');

    wp_register_style('font-awesome', get_template_directory_uri() . '/fonts/fontawesome-612/css/all.min.css', '', '1.0', 'all');
    wp_enqueue_style( 'font-awesome');


    wp_register_script( 'script', get_template_directory_uri() . '/js/scripts.js',  array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'eqe_styles');
?>
<?php
/* =============================================================================
* REGISTRO DE MENUS 
 =============================================================================== */

function eqe_nav_menus( ) {
    register_nav_menus( array(
        'primary' => 'Principal' ,
        'footer'  => 'Menu footer', 
        ) );
    } 
add_action( 'after_setup_theme' , 'eqe_nav_menus');
?>
<?php
/* =============================================================================
* SOPORTE PARA THUMBNAILS, HTM5 ...
 =============================================================================== */
/* Añadiendo soporte */

add_theme_support( 'post-thumbnails');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

        //add_theme_support( 'custom-post' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'chat', 'image', 'link', 'quote', 'status', 'video', 'audio'));
add_post_type_support( 'page', 'page_sidebar-right' );


/* =============================================================================
* AÑADIR TAMAÑO DE IMAGEN y eliminar por defecto
 =============================================================================== */

 /*
 function eqe_remove_default_sizes(){
    add_image_size( 'thumbnailPost', 800, '', true );
    add_image_size( 'thumbnailPost-grid', 400, 300, true );
    add_image_size( 'square', 200, 200, true);

    update_option( 'thumbnail_size_h', 0 );
    update_option( 'thumbnail_size_w', 0 );
    update_option( 'medium_size_h', 0 );
    update_option( 'medium_size_w', 0 );
    update_option( 'large_size_h', 0 );
    update_option( 'large_size_w', 0 );
}
add_action( 'init', 'eqe_remove_default_sizes' );

*/
 
/* =============================================================================
* CABECERA PERSONALIZADA
 =============================================================================== */

function eqe_custom_header(){
    $args = array(
        'width' => 1290,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true
    );
    
    add_theme_support( 'custom-header', $args );    
}
add_action( 'after_setup_theme', 'eqe_custom_header' );


   

/* =============================================================================
* EL LOGOTIPO
 =============================================================================== */
//tamaño del logo

function eqe_custom_logo() {
    $logo_height = 80;
    $logo_width = 240;
    add_theme_support( 'custom-logo' , array(
        'height'    =>  $logo_height,
        'width'     =>  $logo_width,    
        'flex-height'=> true,
        'flex-widht' => true,
        'header-text' => array( 'site-title', 'site-description')
    ));
}

add_action( 'after_setup_theme', 'eqe_custom_logo');
?>

<?php
/* =============================================================================
* SIDEBARS 
 ===============================================================================*/

function eqe_sidebars( ) {
    register_sidebar( array(
        'id'    => 'sidebar',
        'name'  =>  'sidebar',
        'description'   => 'barra lateral derecha - izquierda',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  =>  '</li>',
        'bebore_title'  =>  '<h2 class="eqe-widget-title">',
        'after_title'   =>  '</h2>',
    ) );

    register_sidebar( array(
        'id'    =>  'footer-1',
        'name'  =>  'footer-1',
        'description'   => 'widget en el footer, 1 de 3',
        'before_widget' =>  '<li id="%1$s class="%2$s">',
        'after_widget'  =>  '</li>',
        'before_title'  =>  '<h2 class="eqe-widget-title-footer">',
        'after_title'   =>  '</h2>',
    
    )); 
}
?>
<?php add_action( 'widgets_init', 'eqe_sidebars' ); ?>

<?php



/* =============================================================================
* boton volver arriba
 ===============================================================================*/
add_action("wp_footer", "eqe_add_arrow_top");
function eqe_add_arrow_top(){
    $url = get_template_directory_uri() . '/img/flecha-hacia-arriba.png';
        ?>
            <a id='scrolltop' class='arrow-top'><?php echo "<img src=" . $url .  ">"; ?></a>
            <?php    
}


/* =============================================================================
* ESTILOS CSS PARA HOME
 ===============================================================================*/
/*function styles_home(){
    if (have_posts( $cont=1)) {
        while( have_posts( )){
            $cont=$cont + 1;
            if($cont%2==0){
                $classHome = "class='-one'";
            }else{
                $classHome = "class='-two'";
            }
        return $classHome;
        }            
}}*/