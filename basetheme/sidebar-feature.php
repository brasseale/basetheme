<?php
/**
 * Sidebar Feature Template
 *
 * @package basetheme
 * @subpackage Template
 */

if ( is_active_sidebar( 'feature' ) ) : ?>

	<div id="sidebar-feature" class="sidebar">

		<?php dynamic_sidebar( 'feature' ); ?>

	</div><!-- #sidebar-feature -->

<?php endif; ?>