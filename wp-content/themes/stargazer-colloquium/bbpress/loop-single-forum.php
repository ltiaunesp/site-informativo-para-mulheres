<?php

/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class(); ?>>

	<li class="bbp-forum-info">

		<?php if ( bbp_is_user_home() && bbp_is_subscriptions() ) : ?>

			<span class="bbp-row-actions">

				<?php do_action( 'bbp_theme_before_forum_subscription_action' ); ?>

				<?php bbp_forum_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

				<?php do_action( 'bbp_theme_after_forum_subscription_action' ); ?>

			</span>

		<?php endif; ?>

		<?php do_action( 'bbp_theme_before_forum_title' ); ?>

		<h5><a class="bbp-forum-title entry-title" href="<?php bbp_forum_permalink(); ?>"><?php bbp_forum_title(); ?></a></h5>

		<?php do_action( 'bbp_theme_after_forum_title' ); ?>

		<?php do_action( 'bbp_theme_before_forum_description' ); ?>

		<div class="bbp-forum-content"><?php bbp_forum_content(); ?></div>

		<?php do_action( 'bbp_theme_after_forum_description' ); ?>

		<?php do_action( 'bbp_theme_before_forum_sub_forums' ); ?>

		<div class="sub-forums font-headlines"><?php bbp_list_forums(); ?></div>

		<?php do_action( 'bbp_theme_after_forum_sub_forums' ); ?>

		<?php bbp_forum_row_actions(); ?>

	</li>

    <div class="forum-meta">
    
    	<div class="bbp-forum-counts">
    	    <?php bbp_forum_topic_count(); ?> topics,
    	    <?php bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); ?> replies
    	</div>
    
    	<li class="bbp-forum-freshness font-headlines">
    		<?php do_action( 'bbp_theme_before_forum_freshness_link' ); ?>
    		<?php bbp_forum_freshness_link(); ?>
    		<?php do_action( 'bbp_theme_after_forum_freshness_link' ); ?>
    	</li>
    	
    </div>

</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->
