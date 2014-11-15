<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if($post->post_parent == 17) {
			the_title( '<h2 class="entry-title">', '</h2>' );
			echo '<h3>' . get_field('years') . '</h3>';
		} ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if($post->post_parent == 17 && get_field('intro_image')) {
			$introImage = get_field('intro_image');
		} ?>
	</div><!-- .entry-content -->	
	<?php if ( $introImage ): ?>	
	<?php echo '<img class="intro-img" src="' . $introImage["url"] . '"/>'; ?>
	<?php endif; ?>	
	
	<?php 

	$images = get_field('works');

	if( $images ): ?>
	    <div class="gallery-container internal">
	        <?php foreach( $images as $image ): ?>
	            <div class="img-container">
	                <a href="<?php echo $image['url']; ?>">
	                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </a>
	                <span class='fade-in'><div class="info"><h4><?php echo $image['title']; ?></h4></div></span>
	            </div>
	        <?php endforeach; ?>
	    </div>
	<?php endif; ?>

<?php 
$images = get_field('works');

if( $images ): ?>
    <div class="gallery">
        <ul class="gallery-item">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <div class="caption">
                    	<p><?php echo $image['caption']; ?></p>
                    	<p><?php echo $image['title']; ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
</article><!-- #post-## -->