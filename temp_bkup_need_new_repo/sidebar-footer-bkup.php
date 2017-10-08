<?php
/**
 *
 * @package aReview
 */
?>
<div class="decoration-bar footer-bar"></div>
<div id="sidebar-footer" class="footer-widget-area clearfix" role="complementary">
	<div class="container-fluid">
		<div class="row">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
				<div class="sidebar-column col-xs-6 col-sm-4 col-md-4 col-lg-4"> <?php
					dynamic_sidebar( 'sidebar-4'); 
				?> </div> <?php	
			}
			if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
				<div class="sidebar-column col-xs-6 col-sm-4 col-md-4 col-lg-4"> <?php
					dynamic_sidebar( 'sidebar-5'); 
				?> </div><div class="clearfix show-mobile"></div> <?php	
			}
			if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
				<div class="sidebar-column col-xs-12 col-sm-4 col-md-4 col-lg-4"> <?php
					dynamic_sidebar( 'sidebar-6'); 
				?> </div> <?php	
			}		
			?>
		</div>
	</div>	
</div>