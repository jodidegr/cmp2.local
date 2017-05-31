    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12" id="footer-col1">
                    <p class="trefwoorden">
                        Trefwoorden: 
                    </p>
                    <ul>
                      <?php wp_list_cats() ?>
                    </ul> 
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12" id="footer-col2">
                    <p class="paginas">
                        Pagina's:
                    </p>
                    <?php  wp_nav_menu( 
                    array( 
                       'theme_location'         => 'footer-menu',
                       'menu_class'             => 'footer-list',
                       'menu_id'                => '',
                       'echo'                   => true,
                       'depth'                  => 1,
                       ) 
                    ); 
                ?>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12" id="footer-col3">
                     <?php get_sidebar( 'right' ) ?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="footer-long-text">
                        Copyright© Arteveldehogeschool <?php the_date('Y') ?> - <a href="<?php get_permalink() ?>/disclaimer">Disclaimer</a> - Zonder Schuldgevoel
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- JQ wordt lokaal ingeladen via functions.php  -->

    <!-- Bootstrap en main.js worden via functions.php ingeladen -->

    <?php wp_footer() ?>
</body>

</html>