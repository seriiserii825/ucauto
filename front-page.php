<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <!--[if lt IE 11]>
    <link href="css/ie9.css" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--<div class="load">-->
<!--    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/loading.GIF" alt="loading">-->
<!--</div>-->

<!-- ============HEADER============= -->
<header>
    <div class="full-width header">
        <div class="container">
            <div class="navigation">
                <div class="menu-mobile-icon menu-hide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile.png" alt="mobile">
                </div>
                <div class="logo-block">
                    <div class="logo-wrapper">
						<?php the_custom_logo(); ?>
                    </div>
                    <div class="languages">
						<?php the_widget( 'WPGlobusWidget' ); ?>
                    </div>
                </div>
				<?php wp_nav_menu( [
					'theme_location'  => 'menu-top',
					'menu'            => '',
					'container'       => 'nav',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
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
                <span class="fa fa-times close-menu"></span>
            </div>
        </div>
    </div>
</header>

<!-- ============MAIN BANER============= -->

<div class="full-width main-baner">
    <div class="layer-main-baner"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-5 col-sm-12">
                <div class="home-contact-form">
                    <div class="home-contact-form-wrap">
                        <h1>Safe Driving <br>is <span class="blue-color">NOT an Accident</span></h1>
                        <div class="contact-form">
                            <div class="form-header">
                                <h3>get prices & book online today</h3>
                            </div>
                            <form action="/">
                                <div class="form">
                                    <input type="text" placeholder="Your Name">
                                    <input type="email" placeholder="Your Email" required>
                                    <input type="text" placeholder="Your Phone Number">
                                    <div class="date-wrap">
                                        <input type="text" placeholder="Your Birth Date" class="datepicker">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.png"
                                             alt="calendar">
                                    </div>
                                    <div class="drop">
                                        <b>Select Your Course</b>
                                        <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                        <span class="filter-button">
                                                     <a href="">Select Your Course</a>
                                                     <a href="">Course A</a>
                                                     <a href="">Course B</a>
                                                     <a href="">Course C</a>
                                                     <a href="">Course D</a>
                                                     <a href="">Course E</a>
                                                </span>
                                    </div>
                                    <input type="checkbox">
                                    <span class="agree">I agree with the Terms & Conditions.</span>
                                </div>
                                <div class="send-button">
                                    <input type="submit" value="Contact us today!">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-container home-baner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="home-img">
                    <div class="bg-bg"
                         style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/main-baner-img2.jpg)">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-img">
                    <div class="bg-bg"
                         style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/main-baner-img3.jpg)">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-img">
                    <div class="bg-bg"
                         style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/main-baner-img4.jpg)">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="our-offers">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="our-offers-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/offers_icon_1.png" alt="icon"
                         class="offers-icon">
                    <h2>our offers</h2>
                    <p>Learn for less. We have a range of packages
                        with amazing discounts.</p>
                </div>
                <span class="separator separ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/separator.png" alt="separator">
                </span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="our-offers-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/offers_icon_2.png" alt="icon"
                         class="offers-icon">
                    <h2>become instructor</h2>
                    <p>Start a new and rewarding career with one of the largest driving school.</p>
                </div>
                <span class="separator">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/separator.png" alt="separator">
                </span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="our-offers-block leftstep">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/offers_icon_3.png" alt="icon"
                         class="offers-icon">
                    <h2>book &amp; pay online</h2>
                    <p>Get prices in your area and book now to start learning how to drive.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category-wraper">
                    <h4>driving license categories</h4>
                    <div class="swiper-container category-baner">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category1.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category1_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car3.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category A</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 500 and
                                        800kg.</p>
                                    <h5 class="slide_subcat">Category A+A1</h5>
                                    <p class="slide_subcat_text">You can drive A category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category2.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category2_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car4.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category C1</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 3,500 and
                                        7,500kg (with a trailer up to 750kg).</p>
                                    <h5 class="slide_subcat">Category C1+E</h5>
                                    <p class="slide_subcat_text">You can drive C1 category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category3.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category3_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car5.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category B</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 3,500 and
                                        7,500kg (with a trailer up to 750kg).</p>
                                    <h5 class="slide_subcat">Category B+B1</h5>
                                    <p class="slide_subcat_text">You can drive B1 category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category4.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category4_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car2.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category C1</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 3,500 and
                                        7,500kg (with a trailer up to 750kg).</p>
                                    <h5 class="slide_subcat">Category C1+E</h5>
                                    <p class="slide_subcat_text">You can drive C1 category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category5.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category5_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category D</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 3,500 and
                                        7,500kg (with a trailer up to 750kg).</p>
                                    <h5 class="slide_subcat">Category D+E</h5>
                                    <p class="slide_subcat_text">You can drive D1 category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category6.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category6_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car7.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category E</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 3,500 and
                                        7,500kg (with a trailer up to 750kg).</p>
                                    <h5 class="slide_subcat">Category E+E1</h5>
                                    <p class="slide_subcat_text">You can drive E1 category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                            <div class="swiper-slide category-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category7.png"
                                     alt="category" class="hov">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category7_hov.png"
                                     alt="category" class="roll">
                                <div class="category-text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car6.png"
                                         alt="car">
                                    <h4>Medium-sized vehicles</h4>
                                    <h5 class="slide_cat_t">Category G</h5>
                                    <p class="slide_cat_t_text">You can drive vehicles weighing between 3,500 and
                                        7,500kg (with a trailer up to 750kg).</p>
                                    <h5 class="slide_subcat">Category G1</h5>
                                    <p class="slide_subcat_text">You can drive G1 category vehicles with a trailer over
                                        750kg, but the trailer - when fully loaded - can’t weigh more than the vehicle.
                                        The combined weight of both can’t exceed 12,000kg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-next"><span class="fa fa-chevron-right"></span></div>
                    <div class="slide-prev"><span class="fa fa-chevron-left"></span></div>
                    <div class="category-desc">
                        <div class="image-desc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car.png" alt="car"
                                 class="avto">
                        </div>
                        <div class="text-desc">
                            <h4>Medium-sized vehicles</h4>
                            <h5 class="cat_t"></h5>
                            <p class="cat_t_text"></p>
                            <h5 class="subcat"></h5>
                            <p class="subcat_text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pricing navig">
    <div class="clip">
        <div class="bg bg-bg-chrome"
             style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/pricing-baner.jpg)">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>packages and pricing</h4>
                <div class="swiper-container price-baner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="price-block">
                                <h5>weekday lessons</h5>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>1hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$39<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$43/Hour</span>
                                    </div>
                                </div>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>1.5hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$67<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$70/Hour</span>
                                    </div>
                                </div>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>2hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$94<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$98/Hour</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="price-block">
                                <h5>weekend lessons</h5>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>1hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$41<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$47/Hour</span>
                                    </div>
                                </div>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>1.5hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$76<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$79/Hour</span>
                                    </div>
                                </div>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>2hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$103<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$109/Hour</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="price-block">
                                <h5>test prices</h5>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>1hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$49<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$53/Hour</span>
                                    </div>
                                </div>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>1.5hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$74<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$78/Hour</span>
                                    </div>
                                </div>
                                <div class="price-row">
                                    <div class="lesson">
                                        <span class="fa fa-clock-o white-color"></span>
                                        <span>2hr Lesson</span>
                                    </div>
                                    <div class="money">
                                        <span class="white-color">$85<sup>.00</sup> </span>
                                    </div>
                                    <div class="hour">
                                        <span>$90/Hour</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="price-nav">
                <div class="slide-next"><span class="fa fa-chevron-right"></span></div>
                <div class="slide-prev"><span class="fa fa-chevron-left"></span></div>
            </div>
        </div>
    </div>
</div>

<!--=========================================== TESTIMONIALS =============================================-->

<div class="testimonials">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>our passes</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="swiper-container man-baner">
                    <div class="swiper-wrapper slide-mov-wrap">
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man1.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man2.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man3.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man4.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man5.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man6.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man7.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man8.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man9.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man10.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man4.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man5.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man6.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man7.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-mov">
                            <div class="man-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man8.jpg"
                                     alt="people">
                                <div class="layer-man"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container comments-baner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am justso, but so happy
                                        I really got my license and this is happening just thanks to you guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="coments-wrapper">
                                <div class="comments-text">
                                    <p>I believe this website is very convenient for on-the-go people. I could take it
                                        on my own time instead of going to a class to take it. All my friends are taking
                                        its because I recommended it to them. I liked it. The course was easy to follow
                                        online and simple to understand. I passed the course on my first try. Course was
                                        challenging and toally satisfying once I completed it. I am just so, but so
                                        happy I really got my license and this is happening just thanks to you
                                        guys!!</p>
                                    <h5>Elizabeth O.</h5>
                                    <span class="quot"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/quote.png"
                                                alt="q"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-next"><span class="fa fa-chevron-right"></span></div>
                    <div class="slide-prev"><span class="fa fa-chevron-left"></span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-line-wrap">
                    <div class="bottom-line">
                        <h4>4578 passes and counting...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!--=========================================== FOOTER =============================================-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="state">
                    <h3>Looking for Driver Driving School in Another State?</h3>
                    <div class="state-list">
                        <ul>
                            <li><span class="fa fa-angle-right"></span><a href="">Alabama</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Alaska</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Arizona</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Arkansas</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">California</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Colorado</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Connecticut</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Delaware</a></li>
                        </ul>
                    </div>
                    <div class="state-list">
                        <ul>
                            <li><span class="fa fa-angle-right"></span><a href="">Florida</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Georgia</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Hawaii</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Idaho</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Illinois</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Indiana</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Iowa</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Kansas</a></li>
                        </ul>
                    </div>
                    <div class="state-list">
                        <ul>
                            <li><span class="fa fa-angle-right"></span><a href="">Kentucky</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Louisiana</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Maine</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Maryland</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Massachusetts</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Michigan</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Minnesota</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Mississippi</a></li>
                        </ul>
                    </div>
                    <div class="state-list">
                        <ul>
                            <li><span class="fa fa-angle-right"></span><a href="">Missouri</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Montana</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Nebraska</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Nevada</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">New Hampshire</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">New Jersey</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">New Mexico</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">New York</a></li>
                        </ul>
                    </div>
                    <div class="state-list">
                        <ul>
                            <li><span class="fa fa-angle-right"></span><a href="">North Carolina</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">North Dakota</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Ohio</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Oklahoma</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Oregon</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Pennsylvania</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Rhode Island</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">South Carolina</a></li>
                        </ul>
                    </div>
                    <div class="state-list">
                        <ul>
                            <li><span class="fa fa-angle-right"></span><a href="">South Dakota</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Tennessee</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Texas</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Utah</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Vermont</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Virginia</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Washington</a></li>
                            <li><span class="fa fa-angle-right"></span><a href="">Washington DC</a></li>
                        </ul>
                    </div>
                    <div class="state-map">
                        <div class="choose-state">
                            <div class="drop">
                                <b>Choose Your State</b>
                                <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                <span class="chose-list">
                                                 <a href="">Choose Your State</a>
                                                 <a href="">Alabama</a>
                                                 <a href="">Alaska</a>
                                                 <a href="">Arizona</a>
                                                 <a href="">Arkansas</a>
                                                 <a href="">California</a>
                                            </span>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/state.png" alt="state">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4>register your email for news and special offers</h4>
                </div>
                <div class="col-md-5">
                    <form action="/">
                        <input type="email" placeholder="Your Email" required>
                        <div class="submit-button">
                            <input type="submit" value="">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-link">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="about-footer-link">
                        <h6>About Us</h6>
                        <ul>
                            <li><a href="about.html">ABOUT us</a></li>
                            <li><a href="pricing.html">pricing plans</a></li>
                            <li><a href="joinus.html">join us</a></li>
                            <li><a href="blog-grid.html">blog</a></li>
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="useful-footer-link">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="">terms and conditions</a></li>
                            <li><a href="">privacy policy</a></li>
                            <li><a href="">sitemap</a></li>
                            <li><a href="">Offers</a></li>
                            <li><a href="">testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="adress-footer-link">
                        <h6>Contact</h6>
                        <ul class="adress-data">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_icon_1.png"
                                     alt="icon"><a href="tel:">012 345 6789</a></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_icon_2.png"
                                     alt="icon"><a href="mailto:" class="footer-mail">info@driver.driving.com</a></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_icon_3.png"
                                     alt="icon">23S CARLTON PLACE, SOUTHAMps D238 2TN
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="footer-logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                                                  alt="logotype"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <span>Copyright 2015 &copy; Driver | All Rights Reserved</span>
                        <div class="footer-follow">
                            <a href="" class="fa fa-facebook"></a>
                            <a href="" class="fa fa-twitter"></a>
                            <a href="" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
