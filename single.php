<?php get_header(); ?>
        </nav>
        <!---- header end  ------>   
    
    	<aside class="sidebar">
        <?php get_sidebar(); ?>
        </aside>
        
		<!----- begin content  ----------------------->
     	<div class="background">
        <!-- Begin text ---->
        <div class="journal-section">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></a></h2>
        <p><small>By line placement</small></p>
		<?php the_content(''); ?>
        <?php endwhile; endif; ?>
        <small>single.php</small>
        
        <!----- end content  ----------------------->
        
        <!----footer start ------>
        </div>
        <!-- end text -->
<?php get_footer(); ?>