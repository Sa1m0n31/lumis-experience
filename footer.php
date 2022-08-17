<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lumis_experience
 */

?>

<footer class="footer flex">
    <div class="footer__col">
        <h5 class="footer__header">
            Lumis Experience
        </h5>
        <p class="footer__text">
            <?php echo get_field('footer_text', 241); ?>
        </p>
    </div>
    <div class="footer__col">
        <h5 class="footer__menu__header">
            <?php echo get_field('footer_header_1', 241); ?>
        </h5>
        <a href="<?php echo home_url(); ?>#aboutUs" class="footer__menu__link">
            <?php echo get_field('footer_link_1', 241); ?>
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Gaming center')->ID); ?>" class="footer__menu__link">
            <?php echo get_field('footer_link_2', 241); ?>
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('F1')->ID); ?>" class="footer__menu__link">
            <?php echo get_field('footer_link_3', 241); ?>
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>" class="footer__menu__link">
            <?php echo get_field('footer_link_4', 241); ?>
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Datenschutzerklärung')->ID); ?>" class="footer__menu__link">
            Datenschutzerklärung
        </a>
        <a href="<?php echo get_page_link(get_page_by_title('Impressum')->ID); ?>" class="footer__menu__link">
            Impressum
        </a>
    </div>
    <div class="footer__col">
        <h5 class="footer__menu__header">
            <?php echo get_field('footer_header_2', 241); ?>
        </h5>
        <p>
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/send-icon.svg" alt="icon" />
            <?php echo get_field('footer_contact_1', 241); ?>
        </p>
        <p>
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/email-icon.svg" alt="icon" />
            <?php echo get_field('footer_contact_2', 241); ?>
        </p>
        <p>
            <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/phone-contact-icon.svg" alt="icon" />
            <?php echo get_field('footer_contact_3', 241); ?>
        </p>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
