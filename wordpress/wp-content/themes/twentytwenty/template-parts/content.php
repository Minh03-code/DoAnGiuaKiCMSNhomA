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

	get_template_part('template-parts/entry-header');

	if (!is_search()) {
		get_template_part('template-parts/featured-image');
	}

	?>

	<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
				the_excerpt();
			} else {
				the_content(__('Continue reading', 'twentytwenty'));
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

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

		edit_post_link();

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

		<!-- this is comment -->
		<div class="comments-wrapper section-inner">

			<form action="http://wordpress.local/wp-comments-post.php" method="post" id="commentform" class="section-inner thin max-percentage" novalidate="">
				<p class="logged-in-as">Logged in as admin. <a href="http://wordpress.local/wp-admin/profile.php">Edit your profile</a>. <a href="http://wordpress.local/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fwordpress.local%2F2023%2F04%2F21%2Fbdibibad%2F&amp;_wpnonce=55d85f750d">Log out?</a> <span class="required-field-message">Required fields are marked <span class="required">*</span></span></p>
				<p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required=""></textarea></p>
				<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="20" id="comment_post_ID">
					<input type="hidden" name="comment_parent" id="comment_parent" value="0">
				</p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="27eaef22a6">
				<script>
					(function() {
						if (window === window.parent) {
							document.getElementById('_wp_unfiltered_html_comment_disabled').name = '_wp_unfiltered_html_comment';
						}
					})();
				</script>
				<p style="display: none !important;"><label>Δ<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="ak_js" value="1682070285588">
					<script>
						document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
					</script>
				</p>
			</form>

			<!-- start form -->
			<form action="http://wordpress.local/wp-comments-post.php" method="post" id="commentform" novalidate="">
				<style>
					.h7 {
						font-size: 0.9rem
					}
				</style>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
				<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
				<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<!------ Include the above in your HEAD tag ---------->




				<input type="hidden" name="comment_parent" id="comment_parent" value="0">
				</p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="27eaef22a6">
					<div class="container-fluid my-5">
						<div class="row">
							<div class="col-3">

							</div>
							<div class="col-6">

								<!--- Post Form Begins -->
								<section class="card">
									<div class="card-header">
										<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
													a Post</a>
											</li>
										</ul>
									</div>
									<div class="card-body">
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
												<div class="form-group">
													<label class="sr-only" for="message">post</label>
													<textarea class="form-control" id="message" rows="3" placeholder="What are you thinking..."></textarea>
												</div>

											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">share</button>
										</div>
									</div>
								</section>
								<!--- Post Form Ends -->

								<!-- Post Begins -->
								<section class="card mt-4">
									<div class="border p-2">
										<!-- post header -->
										<div class="row m-0">
											<div class="">
												<a class="text-decoration-none" href="#">
													<img class="" src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/avat-01-512.png" width="50" height="50" alt="...">
												</a>
											</div>
											<div class="flex-grow-1 pl-2">
												<a class="text-decoration-none" href="#">
													<h2 class="text-capitalize h5 mb-0">Shushant Singh</h2>
												</a>
												<p class="small text-secondary m-0 mt-1">1 day ago</p>
											</div>

											<div class="dropdown">
												<a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fas fa-chevron-down"></i>
												</a>

												<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<a class="dropdown-item text-primary" href="#">Edit</a>
													<a class="dropdown-item text-primary" href="#">Delete</a>
												</div>
											</div>
										</div>
										<!-- post body -->
										<div class="">
											<p class="my-2">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
												turpis sem, dictum id bibendum eget, malesuada ut massa. Ut scel
												erisque nulla sed luctus dapibus. Nulla sit amet mi vitae purus sol
												licitudin venenatis. Praesent et sem urna. Integer vitae lectus nis
												l. Fusce sapien ante, tristique efficitur lorem et, laoreet ornare lib
												ero. Nam fringilla leo orci. Vivamus semper quam nunc, sed ornare magna dignissim sed. Etiam interdum justo quis risus
												efficitur dictum. Nunc ut pulvinar quam. N
												unc mollis, est a dapibus dignissim, eros elit tempor diam, eu tempus quam felis eu velit.
											</p>
										</div>
										<hr class="my-1">
										<!-- post footer begins -->
										<footer class="">
											<!-- post actions -->
											<div class="">
												<ul class="list-group list-group-horizontal">
													<li class="list-group-item flex-fill text-center p-0 px-lg-2 border border-0">
														<a class="small text-decoration-none" href="#">
															<i class="far fa-thumbs-up"></i> 20 Like
														</a>
													</li>
													<li class="list-group-item flex-fill text-center p-0 px-lg-2 border border-right-0 border-top-0 border-bottom-0">
														<a class="small text-decoration-none" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
															<i class="fas fa-comment-alt"></i> 40 Comment
														</a>
													</li>
													<li class="list-group-item flex-fill text-center p-0 px-lg-2 border border-right-0 border-top-0 border-bottom-0 ">
														<a class="small text-decoration-none" href="#">
															<i class="fas fa-share"></i> 90 Share
														</a>
													</li>
												</ul>
											</div>


											<!-- collapsed comments begins -->
											<div class="collapse" id="collapseExample">
												<div class="card border border-right-0 border-left-0 border-bottom-0 mt-1">
													<!-- new comment form -->
													<section class="mt-3">
														<form action="">
															<div class="input-group input-group">
																<input type="text" class="form-control" placeholder="Write Comment" aria-label="Recipient's username" aria-describedby="basic-addon2">
																<div class="input-group-append">
																	<a class="text-decoration-none text-white btn btn-primary" href="#" role="button">Comment</a>
																</div>
															</div>
														</form>
													</section>
													<!-- comment card bgins -->
													<section>
														<div class="card p-2 mt-3">
															<!-- comment header -->
															<div class="d-flex">
																<div class="">
																	<a class="text-decoration-none" href="#">
																		<img class="profile-pic" src="https://cdn3.iconfinder.com/data/icons/avatars-round-flat/33/avat-01-512.png" width="40" height="40" alt="...">
																	</a>
																</div>
																<div class="flex-grow-1 pl-2">
																	<a class="text-decoration-none text-capitalize h6 m-0" href="#">Tarzan</a>
																	<p class="small m-0 text-muted">27 mins ago</p>
																</div>
																<div>
																	<div class="dropdown">
																		<a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="fas fa-chevron-down"></i>
																		</a>

																		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
																			<a class="dropdown-item text-primary" href="#">Edit</a>
																			<a class="dropdown-item text-primary" href="#">Delete</a>
																		</div>
																	</div>
																</div>
															</div>
															<!-- comment header -->
															<!-- comment body -->
															<div class="card-body p-0">
																<p class="card-text h7 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
																<a class="card-link small" href="#">
																	<i class="far fa-thumbs-up"></i> 20 Like
																</a>
															</div>
														</div>
													</section>
													<!-- comment card ends -->

												</div>
											</div>
											<!-- collapsed comments ends -->
										</footer>
										<!-- post footer ends -->
									</div>
								</section>
								<!-- Post Ends -->
							</div>
							<div class="col-3">

							</div>
						</div>
					</div>



					<!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
				

				</html>
			</form>
			<!-- end form -->

		</div><!-- .comments-wrapper -->

	<?php
	}
	?>

</article><!-- .post -->