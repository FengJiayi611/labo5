<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-4w4' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
		
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme_4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
		<!-- .site-branding -->
	
		
		<?php 
		if(is_front_page()): ?>
			<section class="carrousel-2">
				<article class="slider_conteneur">
				 <div class="slider">
				 <img width="150" height="150" src="http://localhost:8888/4w41/wp-content/uploads/2021/03/694f0f0c-fbf7-48a7-bf8c-05468f1ad589-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
					<div class="slider_info">				
						<p>582-3W3 - Web - 90h</p>
						<a href="http://localhost:8888/4w41/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
						<p>Session : 3</p>
					</div>
				 </div>					
				</article>

				<article class="slider_conteneur">
				 <div class="slider">
						<img src="" alt="">
					<div class="slider_info">				
						<p>582-3W3 - Web - 90h</p>
						<a href="http://localhost:8888/4w41/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
						<p>Session : 3</p>
					</div>
				 </div>					
				</article>

				<article class="slider_conteneur">
				 <div class="slider">
						<img src="" alt="">
					<div class="slider_info">				
						<p>582-3W3 - Web - 90h</p>
						<a href="http://localhost:8888/4w41/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
						<p>Session : 3</p>
					</div>
				 </div>					
				</article>				
			</section>
			
			 <!-- carrousel -->
			<section class="ctrl-carrousel">
			<input class= "rad-carrousel" type="radio" name="red-carrousel">
			<input class= "rad-carrousel" type="radio" name="red-carrousel">
			<input class= "rad-carrousel" type="radio" name="red-carrousel">
			</section>
        <!-- carrousel -->
		    <!--section class="button_carrousel"-->
				<!--a id="un">1</a-->
				<!--a id="deux">2</a-->
				<!--a id="trois">3</a-->
			<!--/section-->	
		<?php endif?>
			
	<!--	<img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000000" width="32" height="32">-->
		<nav id="site-navigation" class="main-navigation">
			<button id="burger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <div></div>
            <div></div>
            <div class='ouvrirX3'></div>

			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
