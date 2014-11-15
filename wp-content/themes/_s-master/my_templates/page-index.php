<?php
/*
 * Template Name: Works Index page 
 *
 */

get_header(); ?>
<div class="entry-content">
	<ul>
	    <?php
		$children = get_children( array( 'post_parent' => 17, 'post_type' => 'page' ) );    
		if ( $children ) {
	        foreach( $children as $child ) { ?>
	            <li>
	                <h2><?php echo get_the_title($child->ID); ?></h2>
		            <?php echo get_field('years', $child->ID); ?>
					<ul class="artwork">
						<?php $images = get_field('works', $child->ID);?>
						<?php if( $images ): ?>
						        <?php foreach( $images as $image ): ?>
									<li>
										<div class="col1 col">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										</div>
										<div class="col2 col">
											<h5><?php echo $image['title']; ?></h5>
							         		<?php echo $image['caption']; ?><br/>
							         		<?php echo $image['description']; ?>
										</div>
									</li>
						        <?php endforeach; ?>
						<?php endif; ?>
					</ul>
	            </li>
	    <?php } } ?>
	</ul>
</div>
<?php get_footer(); ?>
