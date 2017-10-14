<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package aReview
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet"> 



<?php if ( get_theme_mod('site_favicon') ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
<?php endif; ?>

<?php if ( get_theme_mod('apple_touch_144') ) : ?>
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_theme_mod('apple_touch_144')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_114') ) : ?>
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_theme_mod('apple_touch_114')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_72') ) : ?>
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_theme_mod('apple_touch_72')); ?>" />
<?php endif; ?>
<?php if ( get_theme_mod('apple_touch_57') ) : ?>
	<link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_mod('apple_touch_57')); ?>" />
<?php endif; ?>

<?php wp_head(); ?>

</div>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'areview' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<?php if ( get_theme_mod('site_logo') ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				<div class="links">
					<div class="lang-links">
						<a href="http://www.scoilgheimhridh.com/ire/">Gaeilge</a> 
						<a href="http://www.scoilgheimhridh.com/">English</a>
					</div>
					<div class="social-links">
	                    <div class="socials">
	                		<a href="https://www.facebook.com/ScoilGheimhridh?ref=hl" target="_blank" onmouseover="document.face_but.src='http://www.scoilgheimhridh.com/wp-content/uploads/2014/09/facebook_on.png'" onmouseout="document.face_but.src='http://www.scoilgheimhridh.com/wp-content/uploads/2014/09/facebook_off.png'"><img src="http://www.scoilgheimhridh.com/wp-content/uploads/2014/09/facebook_off.png" width:"42px" height:"45px" alt="Move your mouse over me" name="face_but">
							</a>
						</div>
						<div class="socials">
							<a href="https://twitter.com/ScoilGheimhridh" target="_blank" onmouseover="document.twitter_but.src='http://www.scoilgheimhridh.com/wp-content/uploads/2014/09/twitter_on.png'" onmouseout="document.twitter_but.src='http://www.scoilgheimhridh.com/wp-content/uploads/2014/09/twitter_off.png'"><img src="http://www.scoilgheimhridh.com/wp-content/uploads/2014/09/twitter_off.png" width:"42px" height:"45px" alt="Move your mouse over me" name="twitter_but">
							</a>
						</div>
					</div>
				</div>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>
			</div>
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation clearfix">
					<?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'menu clearfix', 'fallback_cb' => false ) ); ?>
				</nav>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->
	<div class="clearfix">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<button class="menu-toggle btn"><i class="fa fa-bars"></i></button>
						<?php if ( get_theme_mod('areview_home_icon') != 1 ) : ?>
						<span class="home-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><i class="fa fa-home"></i></a></span>
						<?php endif; ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => false ) ); ?>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
		<div class="decoration-bar"></div>
	</div>

  </div>

	<?php if ( is_home() && get_theme_mod('carousel_display') ) : ?>
		<?php echo areview_carousel_template(); ?>
	<?php endif; ?>
	<div id="content" class="site-content container-fluid">
