<?php
/**
 * Theme Header Section for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main" class="clearfix"> <div class="inner-wrap">
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5206566395845628",
    enable_page_level_ads: true
  });
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="propeller" content="1cd5f36cf46c099167f95a5210708b5b" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style2.css">
</head>

<body <?php body_class(); ?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1596564993977498',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?php	do_action( 'colormag_before' ); ?>
<div id="page" class="hfeed site">
	<?php do_action( 'colormag_before_header' ); ?>
	<header id="masthead" class="site-header clearfix header">
		<div id="header-text-nav-container" class="clearfix">
         <?php if ( get_theme_mod( 'colormag_breaking_news', 0 ) == 1 || get_theme_mod( 'colormag_date_display', 0 ) == 1 || get_theme_mod( 'colormag_social_link_activate', 0 ) == 1 ) : ?>
            <div class="news-bar">
               <div class="inner-wrap clearfix">
                  <?php if (get_theme_mod('colormag_date_display', 0) == 1)
                     colormag_date_display();
                  ?>

                  <?php if (get_theme_mod('colormag_breaking_news', 0) == 1)
                     colormag_breaking_news();
                  ?>

                  <?php if( get_theme_mod( 'colormag_social_link_activate', 0 ) == 1 ) { colormag_social_links(); } ?>
               </div>
            </div>
         <?php endif; ?>

			<?php if (get_theme_mod('colormag_header_image_position', 'position_two') == 'position_one') { colormag_render_header_image(); } ?>

			<div class="inner-wrap">

				<div id="header-text-nav-wrap" class="clearfix">
					<div id="header-left-section">
						<?php
						if((get_theme_mod('colormag_header_logo_placement', 'header_text_only') == 'show_both' || get_theme_mod('colormag_header_logo_placement', 'header_text_only') == 'header_logo_only') && get_theme_mod('colormag_logo', '') != '') {
						?>
							<div id="header-logo-image">

								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('colormag_logo')); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
							</div><!-- #header-logo-image -->
						<?php
						}
                  $screen_reader = '';
                  if ( get_theme_mod( 'colormag_header_logo_placement', 'header_text_only' ) == 'header_logo_only' || (get_theme_mod( 'colormag_header_logo_placement', 'header_text_only' ) == 'disable' )) {
                     $screen_reader = 'screen-reader-text';
                  }
						?>
						<div id="header-text" class="<?php echo $screen_reader; ?>">
                     <?php if ( is_front_page() || is_home() ) : ?>
   							<h1 id="site-title">
   								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
   							</h1>
                     <?php else : ?>
                        <h3 id="site-title">
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </h3>
                     <?php endif; ?>
							<?php
                     $description = get_bloginfo( 'description', 'display' );
                     if ( $description || is_customize_preview() ) : ?>
                        <p id="site-description"><?php echo $description; ?></p>
                     <?php endif;?><!-- #site-description -->
						</div><!-- #header-text -->
					</div><!-- #header-left-section -->
					<div id="header-right-section">
         <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          
          <ins class="adsbygoogle bannerheader"
              style="display:block"
              data-ad-client="ca-pub-5206566395845628"
              data-ad-slot="5558620399"
              data-ad-format="horizontal"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>-->
						<?php
						if( is_active_sidebar( 'colormag_header_sidebar' ) ) {
						?>
						<div id="header-right-sidebar" class="clearfix">
           
						<?php
							// Calling the header sidebar if it exists.
							if ( !dynamic_sidebar( 'colormag_header_sidebar' ) ):
							endif;
						?>
						</div>
						<?php
						}
						?>
			    	</div><!-- #header-right-section -->

			   </div><!-- #header-text-nav-wrap -->

			</div><!-- .inner-wrap -->

			<?php if( get_theme_mod( 'colormag_header_image_position', 'position_two' ) == 'position_two' ) { colormag_render_header_image(); } ?>

			<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
				<div class="inner-wrap clearfix">
					<?php
               if ( get_theme_mod( 'colormag_home_icon_display', 0 ) == 1 ) {
                  if ( is_front_page() ) {
                     $home_icon_class = 'home-icon front_page_on';
                  } else {
                     $home_icon_class = 'home-icon';
                  }
                  ?>
                  <div class="<?php echo $home_icon_class; ?>">
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><i class="fa fa-home"></i></a>
                  </div>
                  <?php
               }
               ?>
               <h4 class="menu-toggle"></h4>
               <?php
               if ( has_nav_menu( 'primary' ) ) {
                  wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary-container', 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) );
               }
					else {
						wp_page_menu();
					}
					?>
               <?php if ( get_theme_mod( 'colormag_random_post_in_menu', 0 ) == 1 ) { ?>
                  <?php colormag_random_post(); ?>
               <?php } ?>
               <?php if ( get_theme_mod( 'colormag_search_icon_in_menu', 0 ) == 1 ) { ?>
                  <i class="fa fa-search search-top"></i>
                  <div class="search-form-top">
                     <?php get_search_form(); ?>
                  </div>
               <?php } ?>
				</div>
        <progress value="0"></progress>
			</nav>

		</div><!-- #header-text-nav-container -->

		<?php if( get_theme_mod( 'colormag_header_image_position', 'position_two' ) == 'position_three' ) { colormag_render_header_image(); } ?>

	</header>
	<?php do_action( 'colormag_after_header' ); ?>
	<?php do_action( 'colormag_before_main' ); ?>
	<div id="main" class="clearfix">
		<div class="inner-wrap clearfix">