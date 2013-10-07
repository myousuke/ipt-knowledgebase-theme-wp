<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package iPanelThemes Knowledgebase
 */
?>
	<div id="secondary" class="widget-area col-md-4 <?php if ( is_single() ) echo 'col-md-push-8'; ?>" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
