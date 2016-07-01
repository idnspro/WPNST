<?php
/**
 * The template for displaying pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://wptheme.idns-technologies.com/idnspro/
 *
 * @package idnspro
 * @subpackage Wptheme_idnspro
 * @since Wptheme idnspro 1.0
 */

get_header(); ?>

<!-- Main -->
<div id="main">
	<div class="inner">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
	</div>
</div>
	<?php get_sidebar( 'content-bottom' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
