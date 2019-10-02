<?php
/**
 * Template Name: History
 */
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

        <section class="ac-container">
            <div>
                <input id="ac-1" name="accordion-1" type="checkbox" />
                <label for="ac-1">О нас</label>
                <article class="ac-small">
                    <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                </article>
            </div>
            <div>
                <input id="ac-2" name="accordion-1" type="checkbox" />
                <label for="ac-2">Наши работы</label>
                <article class="ac-medium">
                    <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                </article>
            </div>
            <div>
                <input id="ac-3" name="accordion-1" type="checkbox" />
                <label for="ac-3">Ссылки</label>
                <article class="ac-large">
                    <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                </article>
            </div>
            <div>
                <input id="ac-4" name="accordion-1" type="checkbox" />
                <label for="ac-4">Контакты</label>
                <article class="ac-large">
                    <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                </article>
            </div>
        </section>
    </div>
<?php
get_footer();
