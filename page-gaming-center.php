<?php
get_header();
?>

<section class="section--page section--page--left section--page--left--gamingCenter">
    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/gaming-center.png" alt="f1" />
    <div class="content">
        <h3 class="content__header">
            <?php echo get_field('header'); ?>
        </h3>
        <p class="content__text">
            <?php echo get_field('text'); ?>
        </p>
    </div>
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

<section class="section section--map flex" style="max-width: 1000px;">
    <div style="width: 48%;">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=7.012163400650025%2C51.45704541205836%2C7.0157039165496835%2C51.45857294337176&amp;layer=mapnik&amp;marker=51.45780918410515%2C7.0139336585998535" style="border: 1px solid black"></iframe>
    </div>
    <div style="width: 48%">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=7.146268486976624%2C51.25592585132649%2C7.153349518775941%2C51.258994305080265&amp;layer=mapnik&amp;marker=51.25745985834891%2C7.14980730000002" style="border: 1px solid black"></iframe>
    </div>
</section>

<section class="section section--gradient">
    <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/gradient.jpg" alt="gradient" />
    <h3 class="section__header">
        <?php echo get_field('contact_header', 241); ?>
    </h3>
    <a href="/kontakt" class="btn">
        Kontakt
        <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/right-arrow.svg" alt="kontakt" />
    </a>
</section>

<a class="section section--bottom section--bottom--page section--bottom--page--f1" href="<?php echo get_page_link(get_page_by_title('F1')->ID); ?>">
    <figure>
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/F1.png" alt="homepage" />
    </figure>
    <div>
        F1 Simulatoren
        <img class="icon" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/right-arrow.svg" alt="arrow" />
    </div>
</a>

<?php
get_footer();
?>
