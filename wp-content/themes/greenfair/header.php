<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>GreenFair</title>

        <?php wp_head(); ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <?php if( get_field('adress', 'option') ): ?>
                                        <p><?php the_field('adress', 'option'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
                                    <?php if( get_field('phone_number', 'option') ): ?>
                                        <p><?php the_field('phone_number', 'option'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-md-4">
                                <div class="social_icon text-right">
                                    <?php 
                                    if( have_rows('url_social_link', 'option') ):
                                        while ( have_rows('url_social_link', 'option') ) : the_row();
                                    ?>
                                            <a href="<?php the_sub_field('url', 'option'); ?>"><i class="fa <?php the_sub_field('social', 'option'); ?>"></i></a>
                                    <?php
                                        endwhile;
                                    else :
                                    endif;
                                     ?>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" href="#">
                                    <?php 
                                        $logo_img = '';
                                        if( $custom_logo_id = get_theme_mod('custom_logo') ){
                                            $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                                                'class'    => 'custom-logo',
                                                'itemprop' => 'logo',
                                            ) );
                                        }

                                        echo $logo_img;
                                    ?>
                                </a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <?php 
                                wp_nav_menu( [
                                    'theme_location'  => 'header-menu',
                                    'menu'            => '', 
                                    'container'       => 'div', 
                                    'container_class' => 'collapse navbar-collapse zero_mp', 
                                    'container_id'    => 'bs-example-navbar-collapse-1',
                                    'menu_class'      => 'nav navbar-nav navbar-right main_menu', 
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'           => 0,
                                ] );
                            ?>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->