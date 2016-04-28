	</div><!-- /#pagecontent -->

	<footer class="footer-wrapper">
		<div class="footer" class="container">
			<?php dynamic_sidebar('footer-widgets'); ?>
		</div>
	</footer>

	<div id="copyright" class="container">
		<p>Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Not an LLC. Design based on <a href="http://templated.co" rel="nofollow">TEMPLATED</a></p>
	</div>

<?php wp_footer(); // This command loads additional resources just like wp_head ?>
</body>
</html>
