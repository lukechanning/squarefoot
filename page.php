<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header
      <?php if( get_theme_mod( 'squarefoot_hero_bg') ) :
        echo 'style=background-image:url("' . esc_url( get_theme_mod( 'squarefoot_hero_bg' ) ) . '")';
      endif; ?>
    >
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
			
<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php
			//Let's just take this out for now, since we don't really want comments on pages, per say
			//comments_template();
			?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>


	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>

	</article>
<?php endwhile;?>
<?php get_footer(); ?>
