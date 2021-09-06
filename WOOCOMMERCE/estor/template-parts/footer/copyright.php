<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



$estoCopyrightShow = carbon_get_theme_option( 'esto_copyright_show' );
 if ('on' == $estoCopyrightShow):
 ?>
<div class="footer-copy">
  <div class="footer-copy1">
    <div class="footer-copy-pos">
      <a href="#home1" class="scroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png"
          alt="Это картинка вверх " class="img-responsive" /></a>
    </div>
  </div>
  <div class="container">
    <?php	
				$estoFooterСopyright = carbon_get_theme_option( 'esto_footer_copyright' ) ?
		carbon_get_theme_option( 'esto_footer_copyright' ) : '';
    ?>
    <p><?php echo $estoFooterСopyright; ?>
    </p>
  </div>
</div>
<?php	
 endif;
  ?>
