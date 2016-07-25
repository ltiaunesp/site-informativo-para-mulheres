<?php get_header(); // Loads the header.php template. ?>
 
<main <?php hybrid_attr( 'content' ); ?>>
 
	<?php if ( have_posts() ) : // Checks if any posts were found. ?>
	
	  
 
		<?php while ( have_posts() ) : // Begins the loop through found posts. ?>
 
			<?php the_post(); // Loads the post data. ?>
 
			<article <?php hybrid_attr( 'post' ); ?>>
 
				<?php if ( is_singular( get_post_type() ) ) : // If viewing a single page. ?>
 
					<header class="entry-header">
						<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
					</header><!-- .entry-header -->
 
					<div <?php hybrid_attr( 'entry-content' ); ?>>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div><!-- .entry-content -->
 
				<?php else : // If not viewing a single page. ?>
 
					<header class="entry-header">
						<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
					</header><!-- .entry-header -->
 
					<div <?php hybrid_attr( 'entry-content' ); ?>>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div><!-- .entry-content -->
 
				<?php endif; // End single page check. ?>
 
			</article><!-- .entry -->
 
		<?php endwhile; // End found posts loop. ?>
 
	<?php else : // If no posts were found. ?>
 
		<?php locate_template( array( 'content/error.php' ), true ); // Loads the content/error.php template. ?>
 
	<?php endif; // End check for posts. ?>
 
</main><!-- #content -->
 
<?php get_footer(); // Loads the footer.php template. ?>