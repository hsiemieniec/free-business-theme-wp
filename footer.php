<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package free-bussiness-theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="grid site-footer">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header',
            'menu_id'        => 'links'
        ) );
        ?>
<!--        <ul class="menu">-->
<!--            <li><a href="#">HOME</a></li>-->
<!--            <li><a href="#">SERVICE</a></li>-->
<!--            <li><a href="#">ABOUT US</a></li>-->
<!--            <li><a href="#">PRICING TABLE</a></li>-->
<!--            <li><a href="#">HOW IT WORK</a></li>-->
<!--            <li><a href="#">HAPPY CLIENTS</a></li>-->
<!--            <li><a href="#">CONTACT US</a></li>-->
<!--        </ul>-->
        <ul class="social">
            <li><img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/img/icon-googleplus.png" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri() ?>/img/icon-linkedin.png" alt=""></li>
        </ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
