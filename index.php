<?php
	get_header();
?>

<div class="site-middle">
	<div class="<?php ikonik_sidebar($get_sidebar_class = false, $get_layout_class = true); ?>">
		<div id="primary" class="content-area <?php ikonik_sidebar($get_sidebar_class = true, $get_layout_class = false); ?>">
			<div id="content" class="site-content" role="main">
				<div class="blog-regular page-layout">
					<?php
						ikonik_archive_title();
					?>
					<?php
						if (have_posts()) :
							while (have_posts()) : the_post();
								?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink(); ?>">
													<?php
														the_title();
													?>
												</a>
											</h2> <!-- .entry-title -->
											<?php
												ikonik_meta();
											?>
										</header> <!-- .entry-header -->
										<?php
											if (has_post_thumbnail())
											{
												?>
													<div class="featured-image">
														<a href="<?php the_permalink(); ?>">
															<?php
																the_post_thumbnail(
																	ikonik_image_size($custom = 'blog-page')
																);
															?>
														</a>
													</div> <!-- .featured-image -->
												<?php
											}
										?>
										<div class="entry-content <?php ikonik_excerpt_class(); ?>">
											<?php
												ikonik_content();
											?>
										</div> <!-- .entry-content -->
									</article>
								<?php
							endwhile;
						else :
						
							ikonik_content_none();
						
						endif;
					?>
					<?php
						ikonik_blog_navigation();
					?>
				</div> <!-- .blog-regular .page-layout -->
			</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
		<?php
			ikonik_sidebar();
		?>
	</div> <!-- .layout-medium OR .layout-fixed -->
</div> <!-- .site-middle -->

<?php
	get_footer();
?>