<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();?>
</div></div>
<?php	if ( has_post_thumbnail() ) { ?>
<div class="post-thumbnail inside-banner">
	<?php the_post_thumbnail( 'insideBanner-size' ); ?>
</div>
<?php } else {?>

 <div class="post-thumbnail inside-banner">
	 <img width="1200" height="270" src="http://www.semsales.ch/2019/wp-content/uploads/2019/06/sauvage-1200x270.jpg" class="attachment-insideBanner-size size-insideBanner-size wp-post-image" alt="">
 </div>
<?php } ?>

 	<div class="site-inner container-fluid">
 		<div class="site-content">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
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

	</main><!-- .site-main -->


</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
