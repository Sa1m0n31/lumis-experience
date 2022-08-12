<?php
get_header();
?>

<section class="section--page section--page--left">
    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/F1.png" alt="f1" />
    <div class="content">
        <h3 class="content__header">
            <?php echo get_field('header_1'); ?>
        </h3>
        <p class="content__text">
            <?php echo get_field('text_1'); ?>
        </p>
    </div>
</section>

<section class="section--page section--page--right">
    <div class="content">
        <h3 class="content__header">
            <?php echo get_field('header_2'); ?>
        </h3>
        <p class="content__text">
            <?php echo get_field('text_2'); ?>
        </p>
    </div>
    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/wymiary.jpg" alt="f1" />
</section>

<section class="section--page section--page--left section--page--table">
    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/tabelka.jpg" alt="f1" />
    <div class="content">
        <h3 class="content__header">
            <?php echo get_field('header_3'); ?>
        </h3>
        <p class="content__text">
            <?php echo get_field('text_3'); ?>
        </p>
    </div>
</section>

<p class="text-center">
    <?php echo get_field('text_center'); ?>
</p>

<section class="section section--icons">
    <h3 class="section--icons__header--page">
            <span>
                <?php echo get_field('number'); ?>
            </span>
        <?php echo get_field('text_after_number'); ?>
    </h3>
    <h4 class="section--icons__subheader">
        <?php echo get_field('text_under_number'); ?>
    </h4>
</section>

<section class="section section--gallery">
    <h4 class="section--gallery__header">
        <?php echo get_field('gallery_header'); ?>
    </h4>
    <h5 class="section--icons__subheader">
        <?php echo get_field('gallery_subheader'); ?>
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

<a class="section section--bottom section--bottom--page" href="<?php echo get_page_link(get_page_by_title('Gaming center')->ID); ?>">
    <figure>
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/gaming-center.png" alt="homepage" />
    </figure>
    <div>
        Gaming Center
        <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/right-arrow.svg" alt="arrow" />
    </div>
</a>

<?php
get_footer();
?>
