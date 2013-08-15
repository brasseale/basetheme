<?php
/**
 * Search Form Template
 *
 * The search form template displays the search form.
 *
 * @package basetheme
 * @subpackage Template
 */
?>
			<div class="s">

				<form method="get" class="searchform" action="<?php echo trailingslashit( esc_url( home_url( '/' ) ) ); ?>">
					<input class="search-text" type="text" name="s" value="<?php if ( is_search() ) echo esc_attr( get_search_query() ); else esc_attr_e( 'Search this site...', 'basetheme' ); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
					<input class="search-submit button" type="submit" value="<?php esc_attr_e( 'Search', 'basetheme' ); ?>" />
				</form><!-- .search-form -->

			</div><!-- .search -->