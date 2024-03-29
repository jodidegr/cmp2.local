<?php get_header(); ?>

    <!-- HOME HEADER-->
    <header class="home" id="home">
        <div class="home-img-filter">
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- INDICATORS -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <!-- END INDICATORS -->

                    <!-- WRAPPER SLIDES -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?= get_template_directory_uri() ?>/images/carousel/carousel1.png" alt="" class=img-car>
                            <div class="carousel-caption">
                                <h2></h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/images/carousel/carousel2.png" alt="" class=img-car>
                            <div class="carousel-caption">
                                <h2>NIEUW!! Ons bier met limoen</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/images/carousel/carousel3.png" alt="" class=img-car>
                            <div class="carousel-caption">
                                <h2>Proef onze volledige collectie</h2>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?= get_template_directory_uri() ?>/images/carousel/carousel4.png" alt="" class=img-car>
                            <div class="carousel-caption">
                                <h2>Doe mee aan onze wedstrijd en win mooie prijzen</h2>
                            </div>
                        </div>
                    </div>
                    <!-- END WRAPPER SLIDES -->

                    <!-- CONTROLS -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- END CONTROLS -->
                </div>
            </div>
        </div>
    </header>
    <!-- END HOME HEADER -->

    <!-- CONTENT -->

    <div class="container">
        <div class="row">
            <div>
                <?php 
                    if(have_posts()) 
                    {
                        while(have_posts())
                        {
                            the_post();
                            //GEEF DE TITEL EN DE CONTENT VAN DE POST WEER
                            //GET TITLE TEMPLATE PART
                            get_template_part('partials/title');


                            get_template_part( 'partials/title', 'content' );
                        }
                    }
                    else
                    {   //INDIEN ER GEEN POST / CONTENT IS ECHO ...
                        echo 'No content available';
                        
                    }
                ?>
            </div>     
        </div>
        <?php get_sidebar(); ?>
    </div>

    <!-- END CONTENT -->

<?php get_footer(); ?>