<?php
/**
 * Content Template for the "Video" post format
 *
 * Displays the "Video" post format content to be called by get_template_part() in the various templates
 *
 * @package basetheme
 * @subpackage Template
 */
?>
<?php do_atomic( 'before_entry' ); // Before loop hook ?>

<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php do_atomic( 'open_entry' ); // Open loop hook ?>
	
	<header class="entry-header">
		
		<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
	
		<?php get_template_part( 'loop', 'byline' ); ?>
		
	</header><!-- .entry-header -->
	
	<?php do_atomic( 'before_the_content' ); // before content hook ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'basetheme' ), 'after' => '</p>' ) ); ?>
	</div><!-- .entry-content -->

	<?php get_template_part( 'loop', 'entry-meta' ); ?>

	<?php do_atomic( 'close_entry' ); // Close loop hook ?>

</article><!-- .hentry -->

<?php do_atomic( 'after_entry' ); // After loop hook ?>
