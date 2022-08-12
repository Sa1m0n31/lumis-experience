<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lumis_experience
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="container">
    <div class="header flex">
        <a href="<?php echo home_url(); ?>" class="header__logo">
            Lumis Experience
        </a>
        <menu class="header__menu flex">
            <a href="<?php echo home_url(); ?>" class="header__menu__item">
                Main Page
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Gaming center')->ID); ?>" class="header__menu__item">
                Gaming Center
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('F1')->ID); ?>" class="header__menu__item">
                F1 Simulatoren
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>" class="header__menu__item">
                Kontakt
            </a>
        </menu>
        <button class="header__menuBtn" onclick="openMenu()">
            <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') ?>/img/menu.svg" alt="menu" />
        </button>
        <div class="mobileMenu">
            <button class="mobileMenu__close" onclick="closeMenu()">
                &times;
            </button>

            <h2 class="mobileMenu__header">
                Lumis Experience
            </h2>

            <a href="<?php echo home_url(); ?>" class="header__menu__item">
                Main Page
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Gaming center')->ID); ?>" class="header__menu__item">
                Gaming Center
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('F1')->ID); ?>" class="header__menu__item">
                F1 Simulatoren
            </a>
            <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>" class="header__menu__item">
                Kontakt
            </a>
        </div>
    </div>

