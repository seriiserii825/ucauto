<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-ucauto
 */

get_header();

?>


    <div class="full-width main-wrapper">
        <div class="top-title">
            <div class="page-intro-bg">
                <div class="clip">
                    <div class="bg bg-bg-chrome"
                         style="background-image:url(<?php echo getThePostThumbSrc( '1920', '340' ); ?>)">
                    </div>
                </div>
            </div>
            <div class="page-title">
                <h3>An Inside Look at Driver Blog Single Post</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-bar-wrapper">
                            <div class="info-bar">
                                <div class="info-point">
                                    <img src="img/info1.png" alt="info">
                                    <h6>Friendly</h6>
                                </div>
                                <div class="info-point">
                                    <img src="img/info2.png" alt="info">
                                    <h6>Experienced</h6>
                                </div>
                                <div class="info-point">
                                    <img src="img/info3.png" alt="info">
                                    <h6>qualified</h6>
                                </div>
                                <div class="info-point">
                                    <img src="img/info4.png" alt="info">
                                    <h6>local</h6>
                                </div>
                                <div class="info-point">
                                    <img src="img/info5.png" alt="info">
                                    <h6>driving course</h6>
                                </div>
                                <div class="info-point">
                                    <img src="img/info6.png" alt="info">
                                    <h6>Quality Cars</h6>
                                </div>
                                <div class="info-point">
                                    <img src="img/info7.png" alt="info">
                                    <h6>lesson target</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog blog-post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-select">
                            <div class="blog-select-button">
                                <a href="blog-grid.html" class="fa fa-th"></a>
                                <a href="blog-list.html" class="fa fa-list-ul"></a>
                            </div>
                        </div>
                        <div class="simple-post">
                            <div class="post-img">
                                <img src="img/post-image1.jpg" alt="post image">
                            </div>
                            <div class="post-title">
                                <h2>How To Pass A Driving Test With 7 Easy Steps</h2>
                                <div class="bar-date">
                                    <img src="img/calendar_icon_dark.png" alt="date">
                                    <span>1/7/2015</span>
                                </div>
                                <div class="bar-inst">
                                    <img src="img/instrctor_icon_dark.png" alt="instructor">
                                    <span>Driver’s Safety</span>
                                </div>
                            </div>
                            <div class="post-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec consectetur
                                    erat. Cras lobortis scelerisque eui ultrices. In maximus velit dolor, ut pulvinar
                                    quam ultrices eu.</p>
                                <div class="quote">
                                    <i>Lorem ipsum dolor sit amet, consectetur adipiscingi elit. Pellenitesque inec
                                        conseictetur eratun esi. Crasut lobortis scelerisque ultrices. In maximus velit
                                        dolor, ut pulvinar quam uiltrices eu. Proin ac liber eu purumu accumsan mattis.
                                        Mauris sit amet dolor.</i>
                                    <span>- Karen Dhonsons</span>
                                </div>
                            </div>
                            <div class="full-post-text">
                                <p>Nulla facilisi. Quisque eu sapien vel ante convallis hendrerit. Suspendisse vel
                                    fringilla nisi. mattis arcu eget ipsum fringilla accumsan. Donec commodo rutrum
                                    crescian. Donec euquis vulputate nunc elementu eti.
                                    Proin dignissim, elit sit amet interdum rhoncus, augue diam tincidunt metus, quis
                                    tincidunt ante dui nec nunc. Phasellus volutpat viverra ultrices. In auctor, lectus
                                    id con sectetur tincidunt, turpis nulla variusuiu mauris, eu tincidunt leo neque et
                                    ex. Phasellus egestas lorem massa, a mollis purus blandit a. Quisque sollicitudin
                                    viverra malesu ada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posueremu cubilia Curae; Donec efficitur cursus ex fringilla sollicitudin.</p>
                                <p>Aenean non neque ac metus accumsan gravida. Vestibulum viverra tincidunt ornare.
                                    Etiam eu mauris sit amet purus iaculis lacinia. Fusce et rhoncus urna, sed aliquam
                                    liberom estibule quod memot dordum.</p>
                            </div>
                            <div class="baner-title">
                                <div class="line-t"></div>
                                <h6>Only A Quarter of ADI’s Get Top Grade On Standards Checks</h6>
                            </div>
                            <div class="post-slider">
                                <div class="swiper-container post-baner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="img/post-slide.jpg" alt="post slider">
                                        </div>
                                    </div>
                                    <div class="slide-next"><span class="fa fa-chevron-right"></span></div>
                                    <div class="slide-prev"><span class="fa fa-chevron-left"></span></div>
                                </div>
                            </div>
                            <p>Morbi dignissim metus leo, ut tincidunt ante bibendum sed. Suspendisse varius orci
                                egestas esti urna mollis, a ornare tellus rutrum. Praesent vulputate est leo, sedumui
                                pharetra arcu interdum vel. Phasellus vel erat vitae lectus ultrices semper. Vivamus
                                gravida dictum ex, in facilis.</p>
                            <div class="comment-block">
                                <div class="comment-title">
                                    <h6>2 comments</h6>
                                    <div class="drop">
                                        <b>Sort by Newest</b>
                                        <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>
                                        <span class="chose-list">
                                                 <a href="">Sort by Newest</a>
                                                 <a href="">Latest</a>
                                                 <a href="">First</a>
                                            </span>
                                    </div>
                                </div>
                                <div class="discussion">
                                    <div class="avatar">
                                        <img src="img/avatar.jpg" alt="avatar">
                                    </div>
                                    <div class="discussion-field">
                                        <input type="text" placeholder="Join the discussion...">
                                    </div>
                                    <div class="file-field">
                                        <span class="fa fa-image"></span>
                                        <input type="file">
                                        <i>Browse Image</i>
                                    </div>
                                </div>
                                <div class="send-comment">
                                    <div class="send-comment-share">
                                        <span>Sign In With</span>
                                        <a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
                                        <a href="https://twitter.com/" class="fa fa-twitter" target="_blank"></a>
                                        <a href="" class="fa fa-rss" target="_blank"></a>
                                    </div>
                                    <div class="send-comment-field">
                                        <span>Your Name:</span>
                                        <input type="text" placeholder="">
                                        <input type="submit" value="send">
                                    </div>
                                </div>
                                <div class="one-comment-block">
                                    <div class="one-com-img">
                                        <img src="img/people.jpg" alt="people">
                                    </div>
                                    <div class="one-com-text">
                                        <div class="one-com-name">
                                            <h6>Lauren M.</h6><span>2 hours ago</span>
                                        </div>
                                        <p>Donec euismod sem laoreet, auctor orci at, varius risus. Morbi malesuada sit
                                            amet ante eu venenatis. Mauris auctor leo id mi interdum, sed tempor velit
                                            eleifeni dim. Praesent vitae tempor est, a tincidunt ante. Suspendisse
                                            tempor ligula id accumsan iaculis. Pellentesque ac laoreet lacus. </p>
                                        <div class="reply">
                                            <a href="" class="fa fa-angle-up"></a>
                                            <div class="block-vote">
                                                <span>You must sign in to down-vote this post.</span>
                                            </div>
                                            <span>|</span>
                                            <a href="" class="fa fa-angle-down"></a>
                                            <a href=""><i>.</i>Reply</a>
                                            <div class="hover-reply-share">
                                                <a href="" class="reply-icon"><i>.</i>Share</a>
                                                <div class="reply-share">
                                                    <a href="https://www.facebook.com/" class="fa fa-facebook"
                                                       target="_blank"></a>
                                                    <a href="https://twitter.com/" class="fa fa-twitter"
                                                       target="_blank"></a>
                                                    <a href="" class="fa fa-rss" target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-comment-block no-img">
                                    <div class="one-com-img">
                                        <img src="img/people-no-avatar.jpg" alt="people">
                                    </div>
                                    <div class="one-com-text">
                                        <div class="one-com-name">
                                            <h6>Karen D.</h6><span>3 hours ago</span>
                                        </div>
                                        <p>In sed lacinia lectus, vel congue turpis. Suspendisse nisl turpis, finibus
                                            vitae ipsum vestibulum, sagittis molestie diam. Vestibulum sem nulla,
                                            hendrerit a lacinia sit amet, congue ac libero. Vestibu lum at finibus nisl.
                                            In augue urna, consectetur non diam sit amet, commodo tristique ante. </p>
                                        <div class="reply">
                                            <a href="" class="fa fa-angle-up"></a>
                                            <div class="block-vote">
                                                <span>You must sign in to down-vote this post.</span>
                                            </div>
                                            <span>|</span>
                                            <a href="" class="fa fa-angle-down"></a>
                                            <a href=""><i>.</i>Reply</a>
                                            <div class="hover-reply-share">
                                                <a href="" class="reply-icon"><i>.</i>Share</a>
                                                <div class="reply-share">
                                                    <a href="https://www.facebook.com/" class="fa fa-facebook"
                                                       target="_blank"></a>
                                                    <a href="https://twitter.com/" class="fa fa-twitter"
                                                       target="_blank"></a>
                                                    <a href="" class="fa fa-rss" target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
