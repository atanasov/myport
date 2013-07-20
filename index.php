<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package My port
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
		    $menu_name = 'primary';

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

	$menu_items = wp_get_nav_menu_items($menu->term_id);
    //$menu_reversed = array_reverse($menu_items);
	$articles_list = '';

	foreach ( (array) $menu_items as $key => $menu_item ) {
	    $title = $menu_item->title;
	    $url = $menu_item->url;
	    $pageid= get_post_meta( $menu_item->ID, '_menu_item_object_id', true );
	    $post = get_page($pageid);
		$content = apply_filters('the_content', $post->post_content);
		$articles_list .= '<section class=".sec" id="section'.$pageid.'">';
		$articles_list .= '<div class="content"><h2>'.$title.'</h2>'.$content.'</div>';
		$articles_list .='</section>';
	}
    } else {
	$articles_list = '<p>Menu "' . $menu_name . '" not defined.</p>';
    }
    // $menu_list now ready to output
    echo $articles_list;
    ?>

	    <?php // if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php // while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					// get_template_part( 'content', get_post_format() );
				?>

			<?php // endwhile; ?>

			<?php //my_port_content_nav( 'nav-below' ); ?>

		<?php // else : ?>

			<?php //get_template_part( 'no-results', 'index' ); ?>

		<?php //endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>