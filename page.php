<?php
get_header();
?>
    <div class="full-width main-wrapper">
    <div class="top-title">
        <div class="page-intro-bg">
			<?php
			if ( has_post_thumbnail() ) {
				$imageSrc = getThePostThumbSrc( '1920', '340' );
			} else {
				$imageSrc = kama_thumb_src( 'w=1920 &h=340', 235 );
			}
			?>
            <div class="clip">
                <div class="bg bg-bg-chrome" style="background-image:url(<?php echo $imageSrc; ?>)"></div>
            </div>
        </div>
        <div class="page-title">
            <h3><?php the_title(); ?></h3>
        </div>
    </div>

    <div class="blog blog-post">
        <div class="container">
            <div class="single-content <?php if(is_page(285)) echo 'video__gallery'; ?>">
				<?php if ( have_posts() ): ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
	
	            <?php $main_table = carbon_get_the_post_meta( 'crb_main_banner' ); ?>
				<?php if ( $main_table ): ?>
                <div class="main-table" style="overflow-x:auto;" id="js-main-table">
                    <div class="main-table__table">
						<?php foreach ( $main_table as $table_item ): ?>
                            <div class="main-table__item">
                                <div class="main-table__img">
                                    <a href="<?php echo $table_item['crb_image']; ?>">
                                        <img src="<?php echo $table_item['crb_image']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="main-table__title">
                                    <h3 class="main-table__title"><?php echo $table_item[ 'title' . get_lang() ]; ?></h3>
                                    <p><?php echo $table_item[ 'text' . get_lang() ]; ?></p>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
					<?php endif; ?>
					
                    <div class="media-gallery" id="js-media-gallery">
						<?php $gallery = carbon_get_the_post_meta( 'crb_media_gallery' ); ?>
						
						<?php foreach ( $gallery as $item ): ?>
                            <div class="media-gallery__item">
                                <h4 class="media-gallery__title"><?php echo carbon_get_theme_option( 'crb_single_resize' . get_lang() ); ?></h4>
                                <a href="<?php echo wp_get_attachment_image_src( (int) $item, 'full' )[0]; ?>">
                                    <img src="<?php echo kama_thumb_src( 'w=200', (int) $item ); ?>" alt="">
                                </a>
                            </div>
						<?php endforeach; ?>
                    </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
