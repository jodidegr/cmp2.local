<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico"/>
    <!-- Bootstrap en CSS worden ingeladen in functions.php -->

    <?php wp_head() ?>
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    
            <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
            echo '<div class="site-logo"><a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name') ).'" rel="home">'.'<img src="'. esc_url( $logo[0] ) .'"></a>';
            } else {
            echo '<h1 class="header-text"><a href="'.esc_url( home_url( '/' ) ).'" rel="home">'. get_bloginfo( 'name' ) .'</a></h1>';
            } 
            ?>

            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-collapse-3">
                <ul class="nav navbar-nav navbar-right">
                <?php  wp_nav_menu( 
                    array( 
                       'theme_location'         => 'primary-menu',
                       'container'              => '',
                       'menu'                   => '',
                       'items_wrap'             => '<li id="%1$s" class="%2$s">%3$s</li>',
                       'echo'                   => true,
                       'depth'                  => 1,
                       ) 
                    ); 
                ?>
                <li>
                    <?php if (is_user_logged_in()): ?>
                        <a href="<?php echo wp_logout_url(); ?>">Uitloggen</a>
                    <?php else : ?>
                        <a href="<?php echo wp_login_url(); ?>">Inloggen</a>
                    <?php endif; ?>        
                </li>
                </ul>
            <!-- /.collapse -->
        </div>
        <!-- /.container-->
    </nav>
    <!-- /.navbar -->
    <!-- END NAVIGATION -->
