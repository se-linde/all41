        
     </div>
        <!--- begin footer  ----->  
        <footer>
            <nav class="footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
                 <!--<ul>
                    <li class='active'><a href="">DISCOVER</a></li>
                    <li><a href="">JOURNALS</a></li>
                    	<ul>
                            <li><a href="">HUNGER</a></li>
                            <li><a href="">EDUCATION</a> </li>
                            <li><a href="">MEDICAL</a></li>
                            <li><a href="">DISASTER RESPONSE</a></li>
                            <li><a href="">CLEAN WATER</a></li>
                            <li><a href="">INNOVATION</a> </li>
                        </ul>
                    <li><a href="">NEWS</a> </li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>-->
            </nav>
       		<div class="section">
            	<ul id="social-icons">
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>
/images/facebook-icon.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>
/images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>
/images/linkedin-icon.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>
/images/pinterest-icon.png"></a></li>
                </ul>
            </div>
        	<div class="section">
            	<p><strong>Lorem ipsum</strong> dolscing elit. Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdieporttitor malesuada. <a href="" target="_blank" class="link-1">READ MORE</a></p></p>
            </div>
            <div class="section">
            	<p><strong>Lorem ipsum</strong> dolscing elit. Pellentesque molestie aliquam accumsan. Nunc sagittis ipsum vel cursus fringilla. Donec efficitur imperdieporttitor malesuada. <a href="" target="_blank" class="link-1">READ MORE</a></p></p>
            </div>

        </footer>
</div>
				<p style="text-align: center; padding: 0px;">&#169; 2015 - Maddy Homem - All rights reserved</p>
		
            <!-- end footer -->
       
<!-- start WP footer -->
<?php wp_footer(); ?>
<!-- start WP footer -->
</body>
</html>
