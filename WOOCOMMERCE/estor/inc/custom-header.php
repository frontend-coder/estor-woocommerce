<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action('est_header_action', 'esto_header_modal', 20);
function esto_header_modal() {
  get_template_part('template-parts/header/header-modal');
}

add_action('est_header_action', 'esto_header_body', 25);
function esto_header_body() {
   wp_body_open(); 
	 ?>
<div id="page" class="site">
  <?php
}

add_action('est_header_action', 'esto_header_top', 30);
function esto_header_top() {
  get_template_part('template-parts/header/header-top');
}

add_action('est_header_action', 'esto_header_nav', 40);
function esto_header_nav() {
  get_template_part('template-parts/header/header-nav');
}