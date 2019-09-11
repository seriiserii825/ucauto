<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>CarService - Mechanic Auto Shop Template</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Mechanic, Car, Auto" />
    <meta name="description" content="Responsive Mechanic Auto Shop Template" />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
    $mail = carbon_get_theme_option('crb_mail');
    $phone_1 = carbon_get_theme_option('crb_phone_1');
    $phone_2 = carbon_get_theme_option('crb_phone_2');
    $phone_3 = carbon_get_theme_option('crb_phone_3');
    $phone_clear_1 = clear_phone($phone_1);
    $phone_clear_2 = clear_phone($phone_2);
    $phone_clear_3 = clear_phone($phone_3);

    $facebook = carbon_get_theme_option('crb_facebook');
    $twitter = carbon_get_theme_option('crb_twitter');
    $pinterest = carbon_get_theme_option('crb_pinterest');
?>
<div class="site-container">
    <div class="header-top-bar-container clearfix">
        <div class="header-top-bar">
            <ul class="contact-details clearfix">
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
                    <nav>
                        <ul class="sf-menu">
                            <li class="selected">
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="services.html">
                                    Services
                                </a>
                                <ul>
                                    <li>
                                        <a href="service_engine_diagnostics.html">
                                            Engine Diagnostics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service_lube_oil_filters.html">
                                            Lube, Oil and Filters
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service_belts_hoses.html">
                                            Belts and Hoses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service_air_conditioning.html">
                                            Air Conditioning
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service_brake_repair.html">
                                            Brake Repair
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service_tire_wheel.html">
                                            Tire and Wheel Services
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="galleries.html">
                                    Gallery
                                </a>
                                <ul>
                                    <li>
                                        <a href="gallery_engine_diagnostics.html">
                                            Engine Diagnostics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_oil_change.html">
                                            Oil Change
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_belts_hoses.html">
                                            Belts and Hoses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_tire_change.html">
                                            Tire Change
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_wheel_services.html">
                                            Wheel Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_lube_services.html">
                                            Lube Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_brake_repair.html">
                                            Brake Repair
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_other_car_services.html">
                                            Other Car Services
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">
                                    Pages
                                </a>
                                <ul>
                                    <li>
                                        <a href="about.html">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            404 Not Found
                                        </a>
                                    </li>
                                    <li>
                                        <a href="services.html">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service_engine_diagnostics.html">
                                            Single Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="galleries.html">
                                            Galleries
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gallery_engine_diagnostics.html">
                                            Single Gallery
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">
                                    Blog
                                </a>
                                <ul>
                                    <li>
                                        <a href="blog.html">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog_left_sidebar.html">
                                            Blog Left Sidebar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog_2_columns.html">
                                            Blog 2 Columns
                                        </a>
                                    </li>
                                    <li>
                                        <a href="post.html">
                                            Single Post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="search.html?s=ipsum">
                                            Search Template
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="appointment.html">
                                    Appointment
                                </a>
                            </li>
                            <li class="left-flyout">
                                <a href="contact.html">
                                    Contact
                                </a>
                                <ul>
                                    <li>
                                        <a href="contact.html">
                                            Contact Style 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact_2.html">
                                            Contact Style 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="mobile-menu-container">
                        <div class="mobile-menu-divider"></div>
                        <nav>
                            <ul class="mobile-menu collapsible-mobile-submenus">
                                <li class="selected">
                                    <a href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html">
                                        Services
                                    </a>
                                    <a href="#" class="template-arrow-menu"></a>
                                    <ul>
                                        <li>
                                            <a href="service_engine_diagnostics.html">
                                                Engine Diagnostics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_lube_oil_filters.html">
                                                Lube, Oil and Filters
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_belts_hoses.html">
                                                Belts and Hoses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_air_conditioning.html">
                                                Air Conditioning
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_brake_repair.html">
                                                Brake Repair
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_tire_wheel.html">
                                                Tire and Wheel Services
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="galleries.html">
                                        Gallery
                                    </a>
                                    <a href="#" class="template-arrow-menu"></a>
                                    <ul>
                                        <li>
                                            <a href="gallery_engine_diagnostics.html">
                                                Engine Diagnostics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_oil_change.html">
                                                Oil Change
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_belts_hoses.html">
                                                Belts and Hoses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_tire_change.html">
                                                Tire Change
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_wheel_services.html">
                                                Wheel Services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_lube_services.html">
                                                Lube Services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_brake_repair.html">
                                                Brake Repair
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_other_car_services.html">
                                                Other Car Services
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">
                                        Pages
                                    </a>
                                    <a href="#" class="template-arrow-menu"></a>
                                    <ul>
                                        <li>
                                            <a href="about.html">
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                404 Not Found
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.html">
                                                Services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service_engine_diagnostics.html">
                                                Single Service
                                            </a>
                                        </li>
                                        <li>
                                            <a href="galleries.html">
                                                Galleries
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery_engine_diagnostics.html">
                                                Single Gallery
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Blog
                                    </a>
                                    <a href="#" class="template-arrow-menu"></a>
                                    <ul>
                                        <li>
                                            <a href="blog.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog_left_sidebar.html">
                                                Blog Left Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog_2_columns.html">
                                                Blog 2 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="post.html">
                                                Single Post
                                            </a>
                                        </li>
                                        <li>
                                            <a href="search.html?s=ipsum">
                                                Search Template
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="appointment.html">
                                        Appointment
                                    </a>
                                </li>
                                <li class="left-flyout">
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                    <a href="#" class="template-arrow-menu"></a>
                                    <ul>
                                        <li>
                                            <a href="contact.html">
                                                Contact Style 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact_2.html">
                                                Contact Style 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
