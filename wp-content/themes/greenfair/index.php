<?php get_header(); ?>



        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php 
                    $count = 0;
                    if( have_rows('slider', 'option') ):
                        while ( have_rows('slider', 'option') ) : the_row();
                    ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" class="<?php echo ($count == 0 ? 'active' : '') ?>"></li>
                    <?php
                        $count++;
                        endwhile;
                    else :
                    endif;
                     ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php 
                    $count = 0;
                    if( have_rows('slider', 'option') ):
                        while ( have_rows('slider', 'option') ) : the_row();
                    ?>
                            <div class="item <?php echo ($count == 0 ? 'active' : '') ?>">
                                <div class="slider_overlay">
                                    <?php $image = get_sub_field('photo', 'option'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="">
                                    <div class="carousel-caption">
                                        <div class="slider_text">
                                            <?php the_sub_field('text', 'option'); ?>
                                            <a href="<?php the_sub_field('url', 'option'); ?>" class="custom_btn">Read  More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        $count++;
                        endwhile;
                    else :
                    endif;
                     ?>
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->



        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <?php if( get_field('text_description', 'option') ): ?>
                                <?php the_field('text_description', 'option'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <?php 
                    if( have_rows('second_block', 'option') ):
                        while ( have_rows('second_block', 'option') ) : the_row();
                    ?>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="single_item">
                                        <div class="item_list">
                                            <div class="welcome_icon">
                                                <i class="fa <?php the_sub_field('icon', 'option'); ?>"></i>
                                            </div>
                                            <?php the_sub_field('text', 'option'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :
                    endif;
                     ?>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->



        <!--Start of volunteer-->
        <section id="volunteer">
            <div class="container">
                <div class="row vol_area">
                    <div class="col-md-8">
                        <div class="volunteer_content">
                            <h3>Become a <span>Volunteer</span></h3>
                            <p>Join Our Team And Help the world. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join_us">
                            <a href="" class="vol_cust_btn">join us</a>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->



        <!--Start of portfolio-->
        <section id="portfolio" class="text-center">
            <div class="col-md-12">
                <div class="portfolio_title">
                    <h2>our latest work</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
            <!--End of col-md-2-->
            <div class="colum">
                <div class="container">
                    <div class="row">
                        <form action="/">
                            <ul id="portfolio_menu" class="menu portfolio_custom_menu">
                                <li>
                                    <button data-filter="*" class="my_btn btn_active">Show All</button>
                                </li>
                                <li>
                                    <button data-filter=".blue, .black, .green" class="my_btn">environment</button>
                                </li>
                                <li>
                                    <button data-filter=".red, .green" class="my_btn">climate</button>
                                </li>
                                <li>
                                    <button data-filter=".blue, .yellow, .black" class="my_btn">photography</button>
                                </li>
                                <li>
                                    <button data-filter=".black" class="my_btn">species</button>
                                    <!--
                                </li>
                                <li>
                                    <button data-filter=".black" class="my_btn">Black</button>
                                </li>
                                    -->
                            </ul>
                            <!--End of portfolio_menu-->
                        </form>
                        <!--End of Form-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes">
                                <div class="note blue">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="<?php bloginfo('template_url'); ?>/img/environment.jpg" alt="">
                                </div>
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="<?php bloginfo('template_url'); ?>/img/portfolio_1.jpg" alt="">
                                </div>
                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="<?php bloginfo('template_url'); ?>/img/cliemate.jpg" alt="">
                                </div>
                                <div class="note yellow">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="<?php bloginfo('template_url'); ?>/img/photography.jpg" alt="">
                                </div>
                                <div class="note black">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="<?php bloginfo('template_url'); ?>/img/species.jpg" alt="">
                                </div>
                            </div>
                            <!--End of notes-->
                        </div>
                        <!--End of col-lg-12-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of colum-->
        </section>
        <!--end of portfolio-->



        <!--Start of counter-->
        <section id="counter">
            <div class="counter_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="counter_header">
                                <h2>OUR achivement</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!--End of col-md-12-->
                    </div>
                    <!--End of row-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tree.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">1542</span>
                                        <p>tree cut</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/hand.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">1458</span>
                                        <p>animal lost</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tuhnder.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">9854</span>
                                        <p>blubs collected</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/cloud.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">5412</span>
                                        <p>water level</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
        </section>
        <!--end of counter-->



        <!--start of event-->
        <section id="event">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="event_header text-center">
                            <h2>latest event</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_img">
                                        <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_text text-center">
                                        <a href=""><h4>One Tree Thousand Hope</h4></a>
                                        <h6>15-16 May in Dhaka</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="" class="event_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of row-->
                        <div class="row">
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_text text-center">
                                        <a href=""><h4>One Tree Thousand Hope</h4></a>
                                        <h6>15-16 May in Dhaka</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="" class="event_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_img">
                                        <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-4">
                        <div class="event_news">
                            <div class="event_single_item fix">
                                <div class="event_news_img floatleft">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                </div>
                                <div class="event_news_text">
                                    <a href="#"><h4>Let’s plant 200 tree each...</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event_news">
                            <div class="event_single_item fix">
                                <div class="event_news_img floatleft">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_4.jpg" alt="">
                                </div>
                                <div class="event_news_text">
                                    <a href="#"><h4>Keep your house envirome..</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event_news">
                            <div class="event_single_item fix">
                                <div class="event_news_img floatleft">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                </div>
                                <div class="event_news_text">
                                    <a href="#"><h4>Urgent Clothe Needed Needed</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event_news">
                            <div class="event_single_item fix">
                                <div class="event_news_img floatleft">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_4.jpg" alt="">
                                </div>
                                <div class="event_news_text">
                                    <a href="#"><h4>One Tree Thousand Hope</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event_news">
                            <div class="event_single_item fix">
                                <div class="event_news_img floatleft">
                                    <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                </div>
                                <div class="event_news_text">
                                    <a href="#"><h4>One Tree Thousand Hope</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of event-->



        <!--Start of testimonial-->
        <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>testimonials</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Sadequr Rahman Sojib</h5>
                                                            <p>CEO, Fourder</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Sadequr Rahman Sojib</h5>
                                                            <p>CEO, Fourder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End of item with active-->
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Sadequr Rahman Sojib</h5>
                                                            <p>CEO, Fourder</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-circle">
                                                            <img src="<?php bloginfo('template_url'); ?>/img/tree_cut_3.jpg" alt="">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>Sadequr Rahman Sojib</h5>
                                                            <p>CEO, Fourder</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ENd of item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->



        <!--Start of blog-->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <?php if( get_field('name_description', 'option') ): ?>
                                <?php the_field('name_description', 'option'); ?>
                            <?php endif; ?>
                            <?php if( get_field('blog-category', 'option') ): ?>
                                <?php $blog_id = get_field('blog-category', 'option'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <?php
                        $args = array(
                            'cat'              => $blog_id,
                            'posts_per_page'         => 4
                    
                        );
                    
                    $query = new WP_Query( $args );
                     ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="blog_news">
                                <div class="single_blog_item">
                                    <div class="blog_img">
                                        <?php the_post_thumbnail( 'custom-thumbnail' ); ?>
                                    </div>
                                    <div class="blog_content">
                                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                        <div class="expert">
                                            <div class="left-side text-left">
                                                <p class="left_side">
                                                    <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                    <span class="time"><?php the_time('M d, Y'); ?></span>
                                                    <a href="<?php the_author_link(); ?>"><span class="admin"><i class="fa fa-user"></i> <?php the_author(); ?></span></a>
                                                </p>
                                                <p class="right_side text-right">
                                                    <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                        <span class="count"><?php comments_number('0', '1', '%'); ?></span></a>
                                                </p>
                                            </div>
                                        </div>

                                        <p class="blog_news_content"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="blog_link">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
                    <!-- no posts found -->
                    <?php endif; ?>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!-- end of blog-->



        <!--Start of Purches-->
        <section id="purches">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="purches_title">Buy our wordpress theme</h2>
                    </div>
                    <div class="col-md-2 col-md-offset-4">
                        <a href="" class="purches_btn">purches</a>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of purches-->



        <!--Start of Market-->
        <section id="market">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="market_area text-center">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="<?php bloginfo('template_url'); ?>/img/audiojungle.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="<?php bloginfo('template_url'); ?>/img/codecanyon.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="<?php bloginfo('template_url'); ?>/img/graphicriver.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="<?php bloginfo('template_url'); ?>/img/audiojungle.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of market Area-->
                    </div>
                    <!--End of col-md-12-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of market-->



        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>get in touch</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Elephant Road, Dhaka 1205, Bangladesh</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>+ 8801532-987039</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>youremail@mail.com</span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="scripts/contact.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="subject" class="form-control" id="subject" placeholder="Subject *">
                                                <div class="text_area">
                                                    <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->



<?php get_footer(); ?>