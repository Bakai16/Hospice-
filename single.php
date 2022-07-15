<?php
get_header();
?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

        <section class="blc-news">
        <div class="container">
            <div class="head">
                <h2 class="head-title">#жизнь_хосписа</h2>
            </div>

            <div class="list-container" style="display: none">
                <?php $posts = get_posts('category=1&numberposts=4'); ?>
                <?php foreach($posts as $post) : setup_postdata($post); ?>
                <div class="vid-list">
                <a class="hover" href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="thumbnail"></a>
                <div class="flex-div">
                    <div class="vid-info">
                        <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        <?php the_time('d M Y') ?>
                    </div>
                </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

<?php
get_footer();
