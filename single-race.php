<?php
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	get_header();

	$title  = __('Blog - Latest News', 'avia_framework'); //default blog title
	$t_link = home_url('/');
	$t_sub = "";

	if(avia_get_option('frontpage') && $new = avia_get_option('blogpage'))
	{
		$title 	= get_the_title($new); //if the blog is attached to a page use this title
		$t_link = get_permalink($new);
		$t_sub =  avia_post_meta($new, 'subtitle');
	}

	if( get_post_meta(get_the_ID(), 'header', true) != 'no') 
		echo avia_title(array('title' => $title, 'link' => $t_link, 'subtitle' => $t_sub));

?>

		<div class='container_wrap main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container template-blog template-single-blog '>

				<div class='content units <?php avia_layout_class( 'content' ); ?>'>

				<?php
				/* Run the loop to output the posts.
				* If you want to overload this in a child theme then include a file
				* called loop-index.php and that will be used instead.
				*
				*/
				$page = get_page_by_title('race-page-template');
				$content = apply_filters('the_content', $page->post_content);
				echo $content;

				?>


				<!--end content-->
				</div>

			</div><!--end container-->

<?php get_footer(); ?>
