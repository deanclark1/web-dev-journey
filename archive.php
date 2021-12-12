<?php 
get_header(); ?>

<div class="blog-page">
    <!-- Hero -->
    <header class="" id="archive">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex align-items-center offset-lg-1">
                    <div class="hero-text">
                        <h1 class="heading-2 white-text text-center text-md-start">
                            <?php
                                the_archive_title();
                            ?>
                            <!-- <?php
                                if (is_category()){
                                    single_cat_title();
                                } if (is_author()){
                                    echo "Posts by "; the_author();
                                }
                            ?> -->
                        </h1>
                        <!-- <p class=" text-center text-md-start">
                            World designers and stylists offer to combine short skirts <br> with oversized jackets, tops and shirts.
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="blog-posts">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 pt-0 pt-md-5 mt-1 offset-lg-1">
                <?php
                    while(have_posts()){
                        the_post(); ?>

                    <div class="col">
                        <div class="card zoom-on-hover h-100 p-3">
                            <img src="<?php echo get_theme_file_uri('./images/blog-2.png') ?>" alt="">
                            <div class="card-body px-1">
                                <p class="category-color"> <?php echo get_the_category_list(',') ?></p>
                                <a class="stretched-link" href="<?php the_permalink() ?>">
                                    <h5 class="card-title heading-2"><?php the_title(); ?></h5> 
                                </a> 
                                <p class="card-text"><?php the_excerpt()?></p>
                            </div>
                        </div>
                    </div>
                    <?php }

                   
                ?>
            </div>
            
            <div class="text-center py-5">
                
                <a href="<?php get_the_permalink(); ?>" class="btn btn-primary me-2 page-numbers" ><?php echo paginate_links(); ?>Load More</a>
            </div>
        </div>
    </div>

</div>


<?php
get_footer();
?> 