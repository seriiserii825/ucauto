<?php get_header(); ?>
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
			<?php $offers = carbon_get_theme_option( 'crb_slider' ); ?>
			<?php foreach ( $offers as $offer ): ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="our-offers-block">
						<?php echo $offer['crb_our_offers_svg_icon']; ?>
                        <div class="our-offers__content">
                            <h2><?php echo $offer[ 'crb_our_offers_title' . get_lang() ]; ?></h2>
                            <p><?php echo $offer[ 'crb_our_offers_text' . get_lang() ]; ?></p>
                        </div>
                    </div>
                    <span class="separator separ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/separator.png" alt="separator">
                </span>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</div>

<div class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category-wraper">
                    <h4><?php echo carbon_get_theme_option( 'crb_categories_title' . get_lang() ); ?></h4>
                    <div class="swiper-container category-baner">
                        <div class="swiper-wrapper">
							<?php $category = carbon_get_theme_option( 'crb_categories_slider' ); ?>
							
							<?php foreach ( $category as $item ): ?>
                                <div class="swiper-slide category-slide">
									<?php echo $item['crb_svg_image']; ?>
                                    <div class="category-text">
                                        <img src="<?php echo $item['crb_img_real']; ?>"
                                             alt="car">
                                        <h4><?php echo $item[ 'crb_title' . get_lang() ]; ?></h4>
                                        <h5 class="slide_cat_t"><?php echo $item[ 'crb_cat_name' . get_lang() ]; ?></h5>
                                        <p class="slide_cat_t_text"><?php echo $item[ 'crb_cat_description' . get_lang() ]; ?></p>
                                        <h5 class="slide_subcat"><?php echo $item[ 'crb_sub_cat_name' . get_lang() ]; ?></h5>
                                        <p class="slide_subcat_text"><?php echo $item[ 'crb_sub_cat_description' . get_lang() ]; ?></p>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="slide-next"><span class="fa fa-chevron-right"></span></div>
                    <div class="slide-prev"><span class="fa fa-chevron-left"></span></div>
                    <div class="category-desc">
                        <div class="image-desc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moped.png" alt="car"
                                 class="avto">
                        </div>
                        <div class="text-desc">
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
<?php get_footer(); ?>
<!--=========================================== FOOTER =============================================-->

