<!-- front-page.php
This page loads when you select
"Front page displays A Static Page" in Settings>Reading
If you're using WordPress primarily as a CMS, consider creating a home page in Pages>Add page, and then selecting it here -->
<?php get_header(); // load the header.php template ?>

<div id="content" role="main">

	<!-- the loop -->
	<?php
		if ( have_posts() ) : // Check if there is a post to display.
			while ( have_posts() ) : // There may be more than one post to display. "While" starts the loop, repeating until all post content has been displayed.
				the_post(); // you need this. "Sets up the post", according to wp.org. OK.

				<?php the_title('<h2 class="entry-title">','</h2>'); // This command dispays the title of the post ?>

				<?php the_content(); // This command displays the content of the post ?>

			endwhile; // Stop looping, because all the posts that were found with have_posts() have been displayed
		else : // Maybe there aren't any posts? What if have_posts() didn't find anything? ?>
		<p>Nothing to see here, folks.</p><!-- Show this message if there's nothing to display. -->
	<?php endif; // All done ?>

</div><!-- /#content -->

<div id="sidebar"><!-- create the sidebar widgets div -->
	<?php dynamic_sidebar('widgets'); ?>
</div><!-- /#sidebar -->

<?php get_footer(); // load the footer.php template ?>
