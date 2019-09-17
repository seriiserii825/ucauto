<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>CarService - Mechanic Auto Shop Template</title>
    <!--meta-->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="keywords" content="Mechanic, Car, Auto"/>
    <meta name="description" content="Responsive Mechanic Auto Shop Template"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$mail          = carbon_get_theme_option( 'crb_mail' );
$phone_1       = carbon_get_theme_option( 'crb_phone_1' );
$phone_2       = carbon_get_theme_option( 'crb_phone_2' );
$phone_3       = carbon_get_theme_option( 'crb_phone_3' );
$phone_clear_1 = clear_phone( $phone_1 );
$phone_clear_2 = clear_phone( $phone_2 );
$phone_clear_3 = clear_phone( $phone_3 );

$facebook  = carbon_get_theme_option( 'crb_facebook' );
$twitter   = carbon_get_theme_option( 'crb_twitter' );
$pinterest = carbon_get_theme_option( 'crb_pinterest' );
?>
<div class="site-container">
    <div class="header-top-bar-container clearfix">
        <div class="header-top-bar">
            <ul class="contact-details">
                <li class="template-phone">
                    <a href="tel:<?php echo $phone_clear_1; ?>"><?php echo $phone_1; ?></a>
                </li>
                <li class="template-phone">
                    <a href="tel:<?php echo $phone_clear_2; ?>"><?php echo $phone_2; ?></a>
                </li>
                <li class="template-phone">
                    <a href="tel:<?php echo $phone_clear_3; ?>"><?php echo $phone_3; ?></a>
                </li>
                <li class="template-mail">
                    <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
                </li>
            </ul>
            <div class="languages">
		        <?php the_widget( 'WPGlobusWidget' ); ?>
            </div>
            <div class="socials-block">
                <ul class="social-icons">
                    <li>
                        <a target="_blank" href="<?php echo $facebook; ?>" class="social-facebook"></a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php echo $twitter; ?>" class="social-twitter"></a>
                    </li>
                    <li>
                        <a href="<?php echo $pinterest; ?>" class="social-pinterest"></a>
                    </li>
                </ul>
                <div class="search-container">
                    <a class="template-search" href="#"></a>
                    <form class="search" action="search.html">
                        <input type="text" name="s" placeholder="Search..." value="Search..." class="search-input hint">
                        <fieldset class="search-submit-container">
                            <span class="template-search"></span>
                            <input type="submit" class="search-submit" value="">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <a href="#" class="header-toggle template-arrow-up"></a>
    </div>
    <div class="header-container">
        <!--<div class="header-container sticky">-->
        <div class="vertical-align-table column-1-1">
            <div class="header clearfix">
                <div class="logo vertical-align-cell">
					<?php the_custom_logo(); ?>
                </div>
                <a href="#" class="mobile-menu-switch vertical-align-cell">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </a>
                <div class="menu-container clearfix vertical-align-cell">
					<?php wp_nav_menu( [
						'theme_location'  => 'menu-top',
						'container'       => 'nav',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'sf-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] ); ?>
                    <div class="mobile-menu-container">

                        <div class="mobile-menu-divider"></div>
						<?php wp_nav_menu( [
							'theme_location'  => 'menu-top',
							'container'       => 'nav',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'mobile-menu collapsible-mobile-submenus',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
