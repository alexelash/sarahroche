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
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="gallery-container">

				<?php 
					$menus = wp_get_nav_menus();
					$menu_name = 'homepage-works';
					$menu_items = wp_get_nav_menu_items($menu_name);
					?>
						<?php foreach($menu_items as $menu_item):
							setup_postdata($menu_item);

							$url = $menu_item->url;
							$title = $menu_item->title;
							$menu_item_id = $menu_item->ID;
							$id= $post->ID;
							$slug = basename( get_permalink($id) );

							$images = get_post_meta($menu_item->object_id, 'works', true);
							$thumbnail = $images[0]; 
							$years = get_post_meta($menu_item->object_id, 'years', true);
							$slug = get_post($menu_item)->post_name;

							echo "<a href='$url' id='$slug' class='img-container'><span class='fade-in'>";
							echo "<div class='info'><h2>$title</h2>";
							echo "<h3>" . $years . "</h3></div></span>";
							echo "<img class='entrance-imgs' src='" . wp_get_attachment_url( $thumbnail ) . "'/>";
							echo "</a>";

						endforeach; ?>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>