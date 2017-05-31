<?php get_header(); ?>

    <!-- CONTENT -->

    <div class="container">
        <div class="row">
                <?php 
                    if(have_posts()) 
                    {
                        while(have_posts())
                        {
                            the_post();
                            //GEEF DE TITEL EN DE CONTENT VAN DE POST WEER
                            //GET TITLE TEMPLATE PART
                            get_template_part('partials/title');

                            get_template_part('partials/title','content');
                        }
                    }
                    else
                    {   //INDIEN ER GEEN POST / CONTENT IS ECHO ...
                        echo 'No content available';
                        
                    }
                ?>
        </div>
    </div>

    <!-- END CONTENT -->

<?php get_footer(); ?>