<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php
	// get_template_part( 'template-parts/entry-header' );
	?>
<?php
// Nếu đây là trang home sẽ đi vào trong đây
// Start module 2 post
 if (is_home()) {
	?>
	<div class="container">
		<div class="content_box_m">
			<div class="row">
				<div class="col-md-3 col-xs-3 topnewstime">
					<span class="topnewsdate"><?php echo get_the_date('d', get_the_ID()); ?></span><br>
					<span class="topnewsmonth">Tháng <?php echo get_the_date('m', get_the_ID()); ?></span><br>
				</div>
				<div class="col-md-9 col-xs-9 shortdesc">
					<?php
					if (is_singular()) {
						the_title('<h1 class="entry-title">', '</h1>');
					} else {
						// this is a title in content
						the_title('<h4><a href="' . esc_url(get_permalink()) . '">', '</a></h4>');
					}
					?>
					<p class="p">
						<?php
						the_content(__('Continue reading', 'twentytwenty'));
						// edit_post_link();
						?>
					</p>
				</div>


			</div>
		</div>
	</div>
<?php } 
// End module 2 post
?>

	<?php
	if (!is_search()) {
		get_template_part('template-parts/featured-image');
	}

	?>

<?php
// Nếu đây không phải trang home sẽ đi vào trong đây
 if (!is_home()) {
	?>


	<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if (is_singular()) {
				the_title('<h1 class="entry-title">', '</h1>');
			} else {
				// this is a title in content
				the_title('<h4><a href="' . esc_url(get_permalink()) . '">', '</a></h4>');
			}
			?>

		</div>
		<!-- .entry-content -->

	</div>
	<!-- .post-inner -->
<?php } ?>
	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		//This is link edit of post
		// edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');

		if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {

			get_template_part('template-parts/entry-author-bio');
		}
		?>

	</div><!-- .section-inner -->

	<?php

	if (is_single()) {

		get_template_part('template-parts/navigation');
	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
	?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

	<?php
	}
	?>

</article><!-- .post -->