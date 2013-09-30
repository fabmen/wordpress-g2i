<!-- begin sidebar -->
		<div id="sidebar">
        
				<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar One") ) : ?>
                    
                    
                    <div class="side-widget">
        			<h2>actcualit&eacute;s</h2>
                            <ul>
                    <?php query_posts('category_name=actualites'); ?>
                    </ul>
                    </div>
					 
                    <div class="side-widget">
                            <h2>Liens</h2>
                            <ul>
							<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
                            </ul>
					</div>
                    <div class="side-widget">
                           <?php _e('<h2>Calendrier</h2>'); ?>
                                <?php get_calendar(); ?>
                    </div>
                    <div class="side-widget">
                           <?php _e('<h2>Archives</h2>'); ?>
                            <ul>
                                <?php wp_get_archives('type=monthly'); ?>
                            </ul>
                    </div>
                    <div class="side-widget">
                           <?php _e('<h2>Mots-clefs</h2>'); ?>
                                <?php wp_tag_cloud(); ?>
                    </div>
      			<?php endif; ?>
		</div>
<!-- end sidebar -->