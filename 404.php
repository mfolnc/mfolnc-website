<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package March_For_Our_Lives_NC
 */

get_header();
?>
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title" style="text-align: center;"><?php esc_html_e( 'Oops! We messed up. That page cannot be found.', 'march-for-our-lives-nc' ); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content" align="center">
              <img src="https://media.giphy.com/media/UuNdhvTioeAEu157nM/giphy.gif" alt="Unf*ck The World">
				<br>
				<br>
				<button class="404cta-button" onclick="location.href='/take-action'">GET INVOLVED - START HERE</button>		
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
<?php
get_footer();
?>
