<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		.entry-content {
			max-width: 1200px;
			display: block;
			margin: auto;
			padding-top: 20px;
		}
		h1.entry-title {
			background-image:
    linear-gradient(to top, #164686, rgba(0,0,0,0)),
    url('https://actionnetwork.org/user_files/user_files/000/050/602/original/street00_marchforourlives_news_ahk.jpg');
			background-color: #2c2c2c;
			padding-right: 150px;
			padding-left: 150px;
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

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();