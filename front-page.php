<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resto
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section id="banner">
                <div class="wrapper">
                    <h2>BOOST UP YOUR LOCAL BUSINESS</h2>
                    <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                    <form class="grid">
                        <input type="text" name="name" id="form-name" class="input" placeholder="Full name">
                        <input type="email" name="email" id="form-email" class="input" placeholder="Email address">
                        <input type="number" name="phone" id="form-phone" class="input" placeholder="Phone number">
                        <input class="button" type="submit" value="REQUEST A QUOTE">
                    </form>
                    <img src="<?php echo get_template_directory_uri() ?>/img/laptop.png" alt="LAPTOP">
                </div>
            </section>

            <section id="services" class="wrapper">
                <h2>OUR SERVICES</h2>
                <h4>Lorem Ipsum is simply dummy Business industry</h4>
                <ul id="services-list" class="grid">
                    <?php
                    /* Start the Loop */
                    $wp_query = new WP_Query("category_name=our-services&posts_per_page=6&order=ASC");
                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>


                        <li>
                            <h1 id="<?php echo get_post_meta($post->ID,"icon", true) ?>" class="icon">ICON</h1>
                            <span class="services-description">
                            <h6><?php the_title() ?></h6>
                                <?php echo get_post_meta($post->ID,"description", true) ?>
                            </span>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </section>

            <section id="about-us">
                <div class="wrapper grid">
                    <div id="about-us-text">
                        <h3>ABOUT US</h3>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis facilisis, magna sed congue condimentum, orci nibh suscipit massa, sit amet elementum sem magna eu risus. Sed quis nisi ac quam consectetur posuere. Vivamus est neque, pretium eu commodo ac, pellentesque ac dui. Fusce sit amet condimentum urna, feugiat elementum enim. Ut accumsan ligula nec enim eleifend mattis. Phasellus iaculis ante nec rhoncus tempus. Cras vitae elit tellus. Nam venenatis nec elit et molestie. Donec tempor arcu id placerat feugiat. Praesent quis mattis lacus.
                        </span>
                        <p><a class="button" href="#">READ MORE</a></p>
                    </div>
                </div>
            </section>

            <section id="choose-plan">
                <h2>CHOOSE YOUR PLAN</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing typesetting</h4>
                <div class="wrapper">
                    <ul class="choose-plans grid">
                        <?php
                        /* Start the Loop */
                        $wp_query = new WP_Query("category_name=pricing-plan&posts_per_page=3&order=ASC");
                        while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                        <li class="plan">
                            <div class="plan-content">
                                <h5><?php the_title() ?></h5>
                                <span class="price">
                                    <span class="currency">$</span><?php echo get_post_meta($post->ID,"price", true) ?><p class="price_okres">PER MONTH</p>
                                </span>
                                <ul>
                                    <?php $desc = explode(";", get_post_meta($post->ID,"description", true));
                                        foreach($desc as $item) {
                                            echo "<li>{$item}</li>";
                                        }
                                    ?>
                                </ul>
                                <a class="button" href="#"><?php echo get_post_meta($post->ID,"button-text", true) ?></a>
                            </div>
                        </li>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>

            <section id="how-it-works" class="how-it-works">
                <h2>HOW IT WORKS</h2>
                <h4>Lorem Ipsum is simply dummy Business industry</h4>
                <ul class="grid wrapper">
                    <?php
                    /* Start the Loop */
                    $wp_query = new WP_Query("category_name=how-it-works&posts_per_page=4&order=ASC");
                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>


                        <li class="step">
                            <?php the_post_thumbnail(); ?>
                            <h4 class="step-header"><?php the_title() ?></h4>
                            <span class="step-desc">
                                <?php echo get_post_meta($post->ID,"description", true) ?>
                            </span>
                        </li>

                    <?php endwhile; ?>
                </ul>
                <a href="#" class="button">GET START NOW</a>
            </section>

            <section id="happy-clients" class="happy-clients">
                <h2>HAPPY CLIENT</h2>
                <h4>Lorem Ipsum is simply dummy Business industry</h4>
                <div class="wrapper">
                    <ul class="grid">
                        <?php
                        /* Start the Loop */
                        $wp_query = new WP_Query("category_name=happy-clients&posts_per_page=4&order=ASC");
                        while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                            <li class="client">
                                <?php the_post_thumbnail(array(150, 150)); ?>
                                <span class="client-quote">
                                <?php echo get_post_meta($post->ID,"description", true) ?>
                                <p class="client-name"><?php the_title() ?> <span class="client-occupation"><?php echo get_post_meta($post->ID,"client-occupation", true) ?></span></p>
                            </span>
                            </li>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
