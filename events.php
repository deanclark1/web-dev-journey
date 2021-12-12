<?php
/* Template Name: Events */
get_header();?>

<!-- Hero -->
<header class="programs-hero"  style="background: url(<?php echo get_theme_file_uri('./images/events/events-bg.jpg'); ?>) center no-repeat; background-size: cover;  height: 18rem;">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="programs-hero-text text-center">
                    <h1>All Events</h1>
                    <p>See what is going on in our World</p>
                </div>

            </div>
        </div>
    </div>
</header>

<main class="">
    <section class="all-events">
        <div class="container">
            <div class="heading mb-5">
                <h3>UpComing Events</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 py-0">
               <p>No Upcoming Events</p>
                <!-- <?php 
                
                    $today = date('Ymd');

                    $pageEvents = new wp_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'event',
                        'meta_key' => 'date', 
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'date',
                                'compare' => '>=',
                                'value' => $today,
                                'type' => 'numeric'
                            )
                        )

                    ));
                
                    while($pageEvents->have_posts()){
                        $pageEvents->the_post(); 
                ?>
                    <div class="col">
                        <div class="job-opening-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex pb-3">
                                        <div class="location d-flex  align-items-center">
                                            <i class="fas fa-map-marker-alt me-2"></i>
                                            <span><?php the_field('location'); ?></span>
                                        </div>
                                        <div class="date ms-4">
                                            <span><?php the_field('date'); ?></span>
                                        </div>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p>
                                       
                                        <?php

                                            
                                            if (has_excerpt()){
                                                echo get_the_excerpt();
                                            }else{
                                                echo wp_trim_words(get_the_content(), 100);
                                            }
                                        ?>
                                    </p>
                                </div>
                                                
                                <div class="col-md-6 align-self-center align-items-center">
                                    <div class="event-flyer">
                                        <img  src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                <?php } ?> -->


                <!-- <div class="col">
                    <div class="job-opening-container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex ">
                                    <div class="location d-flex">
                                        <i class="fas fa-map-marker-alt me-2"></i>
                                        <p>The Disruptive Lab</p>
                                    </div>
                                    <div class="date ms-4">
                                       <p><?php the_field('date'); ?></p>
                                    </div>
                                </div>
                                <h3>Womxn's Networking Evening</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, arcu morbi egestas eleifend. Scelerisque purus ut leo dictum varius sed vulputate vitae. Sodales egestas enim nisi massa tellus nibh amet urna lacinia. Quisque laoreet egestas at suspendisse donec. Pharetra, arcu morbi egestas eleifend. Scelerisque purus ut leo dictum varius sed </p>
                            </div>
                            <div class="col-md-6 align-self-center align-items-center">
                               <div class="event-flyer">
                                    <img src="<?php echo get_theme_file_uri('./images/events/flyer.jpg'); ?>" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="job-opening-container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex ">
                                   <div class="location d-flex">
                                        <i class="fas fa-map-marker-alt me-2"></i>
                                        <p>The Disruptive Lab</p>
                                   </div>
                                   <div class="date ms-4">
                                       <p>1st March 2021</p>
                                   </div>
                                </div>
                                <h3>Womxn's Networking Evening</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, arcu morbi egestas eleifend. Scelerisque purus ut leo dictum varius sed vulputate vitae. Sodales egestas enim nisi massa tellus nibh amet urna lacinia. Quisque laoreet egestas at suspendisse donec. Pharetra, arcu morbi egestas eleifend. Scelerisque purus ut leo dictum varius sed </p>
                            </div>
                            <div class="col-md-6 align-self-center align-items-center">
                               <div class="event-flyer">
                                    <img src="<?php echo get_theme_file_uri('./images/events/flyer.jpg'); ?>" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="job-opening-container my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex ">
                                   <div class="location d-flex">
                                        <i class="fas fa-map-marker-alt me-2"></i>
                                        <p>The Disruptive Lab</p>
                                   </div>
                                   <div class="date ms-4">
                                       <p>1st March 2021</p>
                                   </div>
                                </div>
                                <h3>Womxn's Networking Evening</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra, arcu morbi egestas eleifend. Scelerisque purus ut leo dictum varius sed vulputate vitae. Sodales egestas enim nisi massa tellus nibh amet urna lacinia. Quisque laoreet egestas at suspendisse donec. Pharetra, arcu morbi egestas eleifend. Scelerisque purus ut leo dictum varius sed </p>
                            </div>
                            <div class="col-md-6 align-self-center align-items-center">
                               <div class="event-flyer">
                                    <img src="<?php echo get_theme_file_uri('./images/events/flyer.jpg'); ?>" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div> -->    
            </div>
            <div class="heading mb-5">
                <h3>Past Events</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-1 g-4 py-0 pb-5">
                <?php 
                    $today = date('Ymd');

                    $pageEvents = new wp_Query(array(
                        'posts_per_page' => 10,
                        'post_type' => 'event',
                        'meta_key' => 'date', 
                        'orderby' => 'meta_value',
                        'order' => 'DESC',
                        'meta_query' => array(
                            array(
                                'key' => 'date',
                                'compare' => '<=',
                                'value' => $today,
                                'type' => 'numeric'
                            )
                        )

                    ));
                   

                    while($pageEvents->have_posts()) {
                        $pageEvents->the_post(); ?>
                        <div class="col">
                            <div class="job-opening-container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex pb-3">
                                            <div class="location d-flex  align-items-center">
                                                <i class="fas fa-map-marker-alt me-2"></i>
                                                <span><?php the_field('location'); ?></span>
                                            </div>
                                            <div class="date ms-4">
                                                <span><?php the_field('date'); ?></span>
                                            </div>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p>
                                            <?php
                                                if (has_excerpt()){
                                                    echo get_the_excerpt();
                                                }else{
                                                    echo wp_trim_words(get_the_content(), 100);
                                                }
                                            ?>
                                        </p>
                                    </div>
                                                    
                                    <div class="col-md-6 align-self-center align-items-center">
                                        <div class="event-flyer">
                                            <img  src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- news letter section -->
    <section class="newsletter my-5">
        <div class="container">
            <div class="newsletter-box">
                <h2 class="">Sign Up for Our Newsletters</h2>
                <p class="py-3">Get upcoming news and events right in your inbox</p>
                <div class=" d-flex justify-content-center">
                    <form class="form-inline">
                        <div class="d-flex flex-column flex-md-row justify-content-center" >
                            <input type="email" class="form-control" id="email" placeholder="Please enter your email">
                            <button type="submit" class="btn btn-primary ms-md-2 mt-2 mt-md-0">submit</button>
                        </div>
                            
                      </form>
                </div>
            </div>
        </div>
    </section>

   

 </main>

<?php get_footer();?>