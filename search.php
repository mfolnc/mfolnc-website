<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
		h1.page-title {
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
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'march-for-our-lives-nc' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
