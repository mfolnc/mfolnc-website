<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package March_For_Our_Lives_NC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
     
	<?php wp_head(); ?>
</head>
<style>
	header#masthead {
		background-color: #fff !important;
		box-shadow: 0px 3px rgba(0, 0, 0, 0.2);
	    z-index:9999;
	}
	img.custom-logo {
		width: 90px;
		padding: 5px;
		display: inline-block;
  		top: 0px !important;
  		left: 50%;
		align-content: center;
		text-decoration: none;
	}
	.sticky {
  		position: fixed;
  		top: 0;
  		width: 100%;
	}
	.sticky + .content {
  		padding-top: 102px;
	}
	div#primary-menu {
		font-family: Barlow;
		font-weight: bold;
		position: absolute;
		display: block;
  		top: 30px;
  		right: 325px;
	}
	button#button1 {
		background-color: #1c7dff;
		font-family: Barlow;
		font-weight: bold !important;
		width: 150px;
		position: absolute;
		top: 15px;
		right: 150px;
		border-width: 0;
	}
	button#button2 {
		background-color: #164686;
		border-width: 0;
		width: 150px;
		position: absolute;
		top: 15px;
		right: 0px;
	}
	button#button2:hover, button#button2:active, button#button2:visited {
		opacity: .95;
		box-shadow: 3px 3px rgba(0, 0, 0, 0.2);
	}
	button#button1:hover, button#button1:active, button#button1:visited {
		opacity: .95;
		box-shadow: 3px 3px rgba(0, 0, 0, 0.2);
	}
	a.custom-logo-link:hover:before {
		visibility: hidden;
	}
	.main-navigation a {
		margin-left: 10px;
		margin-right: 10px;
	}

</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<?php
			else :
				?>
				<?php
			endif;
			$march_for_our_lives_nc_description = get_bloginfo( 'description', 'display' );
			if ( $march_for_our_lives_nc_description || is_customize_preview() ) :
				?>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'march-for-our-lives-nc' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<button id="button1" onclick="location.href='/take-action'">Take Action</button>
		<button id="button2" onclick="location.href='https://secure.actblue.com/donate/websitemfolnc'">Donate</button>
		<script>
		// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("masthead")

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
		</script>
	</header><!-- #masthead -->