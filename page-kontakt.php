<?php
get_header();
?>
<div class="contactMap">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=7.057160139083863%2C51.33755609466935%2C7.071322202682496%2C51.343681894745&amp;layer=mapnik&amp;marker=51.34061909704347%2C7.064241170883179" style="border: 1px solid black"></iframe>
    <div class="contactSection flex">
        <section class="contactSection__item">
            <h4 class="contactSection__item__header">
                <?php echo get_field('contact_1_header'); ?>
            </h4>
            <div class="flex">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/location-icon.png" alt="img" />
                <div class="contactSection__item__text">
                    <?php echo get_field('contact_1'); ?>
                </div>
            </div>
        </section>
        <section class="contactSection__item">
            <h4 class="contactSection__item__header">
                <?php echo get_field('contact_2_header'); ?>
            </h4>
            <a class="flex" href="tel:<?php echo get_field('contact_2'); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/phone-icon.png" alt="img" />
                <div class="contactSection__item__text">
                    <?php echo get_field('contact_2'); ?>
                </div>
            </a>
        </section>
        <section class="contactSection__item">
            <h4 class="contactSection__item__header">
                <?php echo get_field('contact_3_header'); ?>
            </h4>
            <a class="flex" href="mailto:<?php echo get_field('contact_3'); ?>">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/email-icon.png" alt="img" />
                <div class="contactSection__item__text">
                    <?php echo get_field('contact_3'); ?>
                </div>
            </a>
        </section>
    </div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php
get_footer();
?>
