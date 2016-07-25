<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' );  ?>

<ul id="forums-list-<?php bbp_forum_id(); ?>" class="bbp-forums">

	<li class="bbp-header">

		<ul class="forum-titles font-headlines">
			<li class="bbp-forum-info"><?php _e( 'Forums', 'bbpress' ); ?></li>
			<li class="bbp-forum-freshness"><?php _e( 'Freshness', 'bbpress' ); ?></li>
		</ul>

	</li><!-- .bbp-header -->

	<li class="bbp-body">

		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>

			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>

		<?php endwhile; ?>

	</li><!-- .bbp-body -->
	
	<li class="bbp-footer">
    	</li><!-- .bbp-footer -->


</ul><!-- .forums-directory -->

<?php do_action( 'bbp_template_after_forums_loop' ); ?>