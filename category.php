<?php get_header(); ?>
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
			<h3><?php single_cat_title(); ?></h3>
		</div>
	</div>

    <div class="bg-grey-wrap join-us-grey-block">
        <div class="container">
            <div class="join-us__content">
				<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ): ?>
						<?php the_post(); ?>
                        <div class="block-driver-more">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo carbon_get_the_post_meta( 'cb_services_short_text' . get_lang() ); ?></p>
                            <a href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option( 'crb_our_services_btn' . get_lang() ); ?></a>
                        </div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
