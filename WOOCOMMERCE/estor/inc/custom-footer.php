<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action('est_footer_action', 'esto_newsletter_callback', 10);
function esto_newsletter_callback() {
  get_template_part('template-parts/footer/newsletter');
}

add_action('est_footer_action', 'esto_fotter_start', 15);
function esto_fotter_start() {
?>
<footer class="footer">
  <?php
}

add_action('est_footer_action', 'esto_widgets_callback', 20);
function esto_widgets_callback() {
  get_template_part('template-parts/footer/widgets');
}

add_action('est_footer_action', 'esto_copyright_callback', 30);
function esto_copyright_callback() {
  get_template_part('template-parts/footer/copyright');
}

add_action('est_footer_action', 'esto_fotter_end', 35);
function esto_fotter_end() {
?>
</footer><!-- #colophon -->
<?php
}
  