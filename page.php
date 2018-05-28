<?php
/**
 * Page File
 */

get_header();

?>
<div class="container">
		<div class="wrap">
			<div class="content" id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>

					<div class="navigation">
						<div class="next-posts"><?php next_posts_link(); ?></div>
						<div class="prev-posts"><?php previous_posts_link(); ?></div>
					</div>

				<?php else : ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>

				<?php endif; ?>
			</div>
			<!-- /.content -->
		</div>
		<!-- /.wrap -->
</div>

<?php get_footer(); ?>
