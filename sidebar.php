
        	<div id="sidebar">
            <?php if (is_page()); ?>
            <h2><?php echo get_the_title($post->post_parent); ?></h2>
            <ul>
            
            
            <?php
			
				if ($post->post_parent) { 
					
					wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => '', )); 
				
				} else {
					
					wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => '', ));	
					
				}
				
				?>
                <!--<li><a href="">HUNGER</a></li>
                <li><a href="">EDUCATION</a></li>
                <li><a href="">MEDICAL</a></li>
                <li><a href="">DISASTER RELIEF</a></li>
                <li><a href="">CLEAN WATER</a></li>
                <li><a href="">INNOVATION</a> </li>--------------------->
            </ul> 
           
            <?php if (!(is_page())) : ?>
            <h2>Blog</h2>
            <ul>
            
            <?php wp_list_categories( array('title_li' => '')); ?>
            
            <?php endif; ?>
            </ul>
            
        </div>
             
        <!-- end sidebar ------>
        