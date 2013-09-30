<!-- begin second sidebar -->
		<div id="secondsidebar">
				<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Two") ) : ?>
					<div class="side-widget">
                            <h2>Liens</h2>
                            <ul>
							<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
                            </ul>
					</div>
                    <div class="side-widget">
                           <?php _e('<h2>Calendrier</h2>'); ?>
                            <ul>
                                <?php get_calendar(); ?>
                            </ul>
                    </div>
                    <div class="side-widget">
                           <?php _e('<h2>Archives</h2>'); ?>
                            <ul>
                                <?php wp_get_archives('type=monthly'); ?>
                            </ul>
                    </div>
                    <div class="side-widget">
                           <?php _e('<h2>Mots-clefs</h2>'); ?>
                            <ul>
                                <?php wp_tag_cloud(); ?>
                            </ul>
                    </div>
      			<?php endif; ?>
  		</div>
<!-- end second sidebar -->