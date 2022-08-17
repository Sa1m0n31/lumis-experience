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
 * @package lumis_experience
 */

get_header();
?>

    <main class="videoSection">
        <img class="videoSection__img videoSection__img--1" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/planeta1.png" alt="planeta" />
        <img class="videoSection__img videoSection__img--2" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/planeta2.png" alt="planeta" />
        <button class="videoSection__btn" onclick="toggleVideoSound()">
            <img class="videoSection__btn__icon videoSection__btn__icon--on" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/sound.svg" />
            <img class="videoSection__btn__icon videoSection__btn__icon--off" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/no-sound.svg" />
        </button>
        <video src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/video-header.mp4"
               loop
               muted
               autoplay
               class="video">
        </video>
    </main>

    <section class="section section--services">
        <h1 class="section__header">
            <?php echo get_field('first_header', 241); ?>
        </h1>
        <h2 class="section__text">
            <?php echo get_field('first_subheader', 241); ?>
        </h2>
        <div class="flex">
            <a href="<?php echo get_page_link(get_page_by_title('Gaming center')->ID); ?>" class="section__link">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/L1.png" alt="gaming-center" />
                <div class="ourServicesBtn">
                    Entdecken
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/next-arrow.svg" alt="gaming-center" />
                </div>
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('F1')->ID); ?>" class="section__link">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/R1.png" alt="f1" />
                <div class="ourServicesBtn">
                    Entdecken
                    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/next-arrow.svg" alt="gaming-center" />
                </div>
            </a>
        </div>
    </section>

    <section class="section section--aboutUs flex" id="aboutUs">
        <div class="section__content">
            <p class="section__content__beforeHeader">
                <?php echo get_field('about_us_above_header', 241); ?>
            </p>
            <h3 class="section__content__header">
                <?php echo get_field('about_us_header', 241); ?>
            </h3>
            <p class="section__content__text">
                <?php echo get_field('about_us_text', 241); ?>
            </p>
        </div>
        <figure class="section__content__figure">
            <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/robot.png" alt="robot" />
        </figure>
    </section>

    <section class="section section--icons flex">
        <div class="section--icons__item">
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Ikona_1.png" alt="check" />
            <h4 class="section--icons__header">
                <?php echo get_field('point_1', 241); ?>
            </h4>
        </div>
        <div class="section--icons__item">
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Ikona_2.png" alt="check" />
            <h4 class="section--icons__header">
                <?php echo get_field('point_2', 241); ?>
            </h4>
        </div>
        <div class="section--icons__item">
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/Ikona_3.png" alt="check" />
            <h4 class="section--icons__header">
                <?php echo get_field('point_3', 241); ?>
            </h4>
        </div>
    </section>

    <section class="section section--gallery">
        <h4 class="section--gallery__header">
            <?php echo get_field('gallery_-_header', 241); ?>
        </h4>
        <h5 class="section--icons__subheader">
            <?php echo get_field('gallery_-_subheader', 241); ?>
        </h5>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </section>

    <section class="section section--gradient">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/gradient.jpg" alt="gradient" />
        <h3 class="section__header">
            <?php echo get_field('contact_header', 241); ?>
        </h3>
        <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>" class="btn">
            Kontakt
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/right-arrow.svg" alt="kontakt" />
        </a>
    </section>

    <section class="section section--bottom">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/homepage-bottom.png" alt="homepage" />
    </section>

<?php
get_sidebar();
get_footer();
