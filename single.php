<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package March_For_Our_Lives_NC
 */

get_header();
?>

	<main id="primary" class="site-main">
<head>
	<style>
		aside#secondary {
			display:none;
		}
		.post, .page {
			max-width: 1200px;
			display: block;
			margin: auto;
			padding-top: 20px;
			padding-bottom: 20px;
		}
		h1.entry-title {
			background-image:
    linear-gradient(to top, #164686, #1c7dff),
    url('');
			background-color: #2c2c2c;
			padding-right: 20px;
			padding-left: 30px;
			padding-top: 200px;
			color: #fff;
			max-width: 100% !important;
			background-size: 100%;
			background-position: bottom;
		}
	</style>
		</head>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'march-for-our-lives-nc' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'march-for-our-lives-nc' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
