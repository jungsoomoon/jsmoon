<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

        </div><!-- #main -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'main' ); ?>

            <div class="site-info">
                <?php do_action( 'twentythirteen_credits' ); ?>
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
<script>
    $(document).ready(function(){
         $("#button-header").mouseover(function(){
             $("#header-text-first").css({"-webkit-animation-name": "headerTextDown", "-webkit-animation-duration": "0.5s", "-webkit-animation-fill-mode": "forwards",
                                            "animation-name": "headerTextDown", "animation-duration": "0.5s", "animation-fill-mode": "forwards"});
             $("#header-text-second").css({"-webkit-animation-name": "headerTextUp", "-webkit-animation-duration": "0.5s", "-webkit-animation-fill-mode": "forwards",
                                            "animation-name": "headerTextUp", "animation-duration": "0.5s", "animation-fill-mode": "forwards"});
         });
         $("#button-header").mouseout(function(){
             $("#header-text-first").css({"-webkit-animation-name": "headerTextDownReverse", "-webkit-animation-duration": "0.5s", "-webkit-animation-fill-mode": "forwards",
                                            "animation-name": "headerTextDownReverse", "animation-duration": "0.5s", "animation-fill-mode": "forwards"});
             $("#header-text-second").css({"-webkit-animation-name": "headerTextUpReverse", "-webkit-animation-duration": "0.5s", "-webkit-animation-fill-mode": "forwards",
                                            "animation-name": "headerTextUpReverse", "animation-duration": "0.5s", "animation-fill-mode": "forwards"});
         });
    });
</script>
</body>
</html>