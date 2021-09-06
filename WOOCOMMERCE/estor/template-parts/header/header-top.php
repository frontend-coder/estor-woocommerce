<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<header id="masthead" class="site-header">
  <div class="container">
    <div class="w3l_login">
      <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user"
          aria-hidden="true"></span></a>
    </div>

    <div class="w3l_logo">
      <?php
	$logo_id   = carbon_get_theme_option( 'estor_header_logo' );
	$logo      = $logo_id ? wp_get_attachment_image_src( $logo_id, 'full' ) : '';
	$site_name = carbon_get_theme_option( 'estor_header_logotext' ) ?
		carbon_get_theme_option( 'estor_header_logotext' ) : get_bloginfo( 'name' );

	$site_decs = carbon_get_theme_option( 'estor_header_logodescr' ) ?
		carbon_get_theme_option( 'estor_header_logodescr' ) : get_bloginfo( 'description' );
	
    if ( is_front_page() && is_home() ) :
		if ( $logo_id ) : ?>
      <h1 class="logo-title">
        <img src="<?php echo $logo[0]; ?>" width="<?php echo $logo[1]; ?>" height="<?php echo $logo[2]; ?>" alt="">
      </h1>
      <?php else: ?>
      <h1 class="logo-title" style="font-size:22px;">
        <?php echo $site_name; ?><span style="display:block;"><?php echo $site_decs; ?></span>
      </h1>
      <?php endif;
	else:
		if ( $logo_id ) : ?>
      <div class="logo-title h1">
        <a href="<?php echo home_url( '/' ); ?>">
          <img src="<?php echo $logo[0]; ?>" width="<?php echo $logo[1]; ?>" height="<?php echo $logo[2]; ?>" alt="">
        </a>
      </div>

      <?php else: ?>
      <div class="logo-title h1">
        <a href="<?php echo home_url( '/' ); ?>">
          <?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
        </a>
      </div>

      <?php endif;
	endif; ?>
    </div>

    <div class="search">
      <input class="search_box" type="checkbox" id="search_box">
      <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
          aria-hidden="true"></span></label>

      <div class="search_form">
        <form method="post" action="<?php esc_url( home_url('/') ); ?>">
          <input type="text" value="<?php get_search_query(); ?>" name="s" placeholder="Найти...">
          <input type="submit" value="Поиск">
        </form>
        <div class="search-result"></div>
      </div>

    </div>
    <div class="cart cart box_1">
      <div class="last " style="position:relative;">
        <?php estor_woocommerce_cart_link(); ?>
        <!-- <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                aria-hidden="true"></i></button> -->
      </div>
      <!-- <form action="#" method="post" class="last">
            <input type="hidden" name="cmd" value="_cart" />
            <input type="hidden" name="display" value="1" />
            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                aria-hidden="true"></i></button>
          </form> -->
    </div>
  </div>