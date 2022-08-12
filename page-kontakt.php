<?php
get_header();
?>
<div class="contactMap">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=7.057160139083863%2C51.33755609466935%2C7.071322202682496%2C51.343681894745&amp;layer=mapnik&amp;marker=51.34061909704347%2C7.064241170883179" style="border: 1px solid black"></iframe>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php
get_footer();
?>
