<?php get_header(); ?>

	<main id="main" class="main" role="main">
		<?php if (has_visible_widgets('widget-area-1')) { $sidebarclasses = 'sidebar'; } else { $sidebarclasses = 'no-sidebar'; }?>
		<div class="l-main l-constrain <?php echo $sidebarclasses; ?>">
			
			<div class="l-main__content">
				<section>
					
					<h1 class="page-title"><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
							<?php comments_template( '', true ); ?>
							<?php edit_post_link(); ?>
						</article>
					
					<?php endwhile; ?>

					<?php else: ?>

						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'f1ux' ); ?></h2>
						</article>

					<?php endif; ?>

				</section>
			</div>

			<div class="l-main__sidebar">
				<?php get_sidebar(); ?>
			</div>
		
		</div>
	</main>

<?php get_footer(); ?>