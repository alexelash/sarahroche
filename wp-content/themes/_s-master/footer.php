<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->
	<span class="white-border left"></span><span class="white-border right"></span><span class="white-border top"></span><span class="white-border bottom"></span>
	<footer class="site-footer" role="contentinfo">
		<div class="site-info">
			<div>All artwork © Sarah Roche, 2014</div>
			<a href="mailto:saraheroche@yahoo.com">saraheroche@yahoo.com</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src='//www.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<?php wp_footer(); ?>

</body>
</html>
