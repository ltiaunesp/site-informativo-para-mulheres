<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="post-<?php bbp_reply_id(); ?>" class="bbp-reply-header">

	<div class="bbp-reply-header-meta">
                    
  </div><!-- .bbp-reply-header-meta -->

</div><!-- #post-<?php bbp_reply_id(); ?> -->

<div <?php bbp_reply_class(); ?>>

    	<div class="bbp-reply-author font-headlines">
    
    		<span class="author-name"><?php do_action( 'bbp_theme_before_reply_author_details' ); ?></span>
    		
    		 
    			<?php bbp_reply_author_link( array( 'size' => '0', 'show_role' => false ) ); ?>
    		<span class="bb-reply-header-meta bbp-reply-post-date font-headlines"><?php bbp_reply_post_date(); ?></span>
    		<a href="<?php bbp_reply_url(); ?>" class="bbp-reply-header-meta bbp-reply-permalink font-headlines">#<?php bbp_reply_id(); ?></a>
       	

    
    		<?php if ( bbp_is_user_keymaster() ) : ?>
    
    			<?php do_action( 'bbp_theme_before_reply_author_admin_details' ); ?>
    
    			<?php do_action( 'bbp_theme_after_reply_author_admin_details' ); ?>
    
    		<?php endif; ?>
    
    		<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>
    		
        </div><!-- .bbp-reply-author -->
        

	<div class="bbp-reply-content">

		<?php do_action( 'bbp_theme_before_reply_content' ); ?>

		<?php bbp_reply_content(); ?>

		<?php do_action( 'bbp_theme_after_reply_content' ); ?>

	</div><!-- .bbp-reply-content -->
	
<div class="bbp-reply-footer">

        <div class="bbp-meta">
        
        	
        
        	<?php if ( bbp_is_single_user_replies() ) : ?>
        
        		<span class="bbp-header">
        			<?php _e( 'in reply to: ', 'bbpress' ); ?>
        			<a class="bbp-topic-permalink" href="<?php bbp_topic_permalink( bbp_get_reply_topic_id() ); ?>"><?php bbp_topic_title( bbp_get_reply_topic_id() ); ?></a>
        		</span>
        
        	<?php endif; ?>
        
        	
        
        	<?php do_action( 'bbp_theme_before_reply_admin_links' ); ?>
        
        	<div class="reply-admin-links font-headlines"><?php bbp_reply_admin_links(); ?></div>
        
        	<?php do_action( 'bbp_theme_after_reply_admin_links' ); ?>
        
        </div><!-- .bbp-meta -->
        
</div><!-- end .bbp-reply-footer -->

</div><!-- .reply -->
