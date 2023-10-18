    </div><!-- end div.main-container -->
</div>
<?php wp_footer(); ?>

<div class="main__footer">
    
    <div class="footer__widgets">
        <?php
            if( is_active_sidebar( 'footer-1' )) {
                ?>
                <span class="widgets__widget-footer"><?php dynamic_sidebar( 'footer-1' ); ?></span>
        <?php
            }
        ?>
    </div>

    <div class="footer__bottom">
        <p class="footer__bottom-text">&copy;<?php echo get_the_date('Y'); ?> | <a href="<?php echo esc_url( home_url() ); ?>" alt="<?php bloginfo( ); ?>">
        <?php bloginfo(); ?></a> con mucho <i class="fa-solid fa-heart"> </i> por erreQerre</p>
    </div>
</body>
</html>