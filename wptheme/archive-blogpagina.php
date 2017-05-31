<?php get_header(); ?>

    <!-- CONTENT -->

    <div class="container">
        <div class="row">
                <?php 
                if(have_posts()) : 
                    
                $i=1;   while(have_posts() && $i < 6) : the_post();{
                        
                            get_template_part('partials/title');


                            get_template_part('partials/title','content');


                            get_template_part('partials/title', 'meta');


                            get_template_part('partials/comments');
                        }
                    
                    $i++; endwhile; 
                    {
                        echo '<p>'.next_posts_link().'</p>';
                        echo '<p>'.previous_posts_link().'</p>';
                    }
                    
                    else :
                     
                        echo 'No content available';
                        
                    endif
                ?>
        </div>
    </div>

    <!-- END CONTENT -->

<?php get_footer(); ?>