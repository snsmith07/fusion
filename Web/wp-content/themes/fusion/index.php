<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Fusion
 * @since Fusion 1.0
 */

get_header(); ?>


<!-- fusion index page start -->


    <div class="main-content-wrapper">
      <div class="services" id="services">
        <div class="active">
          <div class="heading-2">
            <div class="line"></div>
            <p class="text-3"><?php echo get_the_title(9); ?></p>
                <div class="text-4">
                    <?php $post = get_post(9); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    if ( !empty($the_content) ) {
                      echo $the_content;
                    } ?>  
                </div>
          </div>
          <div class="services-2 match-height group">
            <?php
                $args = array(
                'post_type' => 'our_services',
                'posts_per_page' => 3,
                'orderby'=> array('ID'=>'ASC'),
            );
            $obituary_query = new WP_Query($args);
            while ($obituary_query->have_posts()) : $obituary_query->the_post(); ?>

            
            <div class="single-service">
                <?php //$img = the_post_thumbnail_url('thumbnail'); ?>
              <img class="i" src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="" width="19" height="21">
              <p class="strategy"><?php echo the_title();?></p>
              <div class="text-5"><?php echo the_content();?></div>
              <div class="link group">
                <img class="layer-2" src="<?php echo get_template_directory_uri()?>/assets/images/image_25.png" alt="" width="13" height="8">
                <a href="<?php echo get_the_permalink(); ?>"><p class="text-6">See Details</p></a>
              </div>
            </div>
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>

      <!--Portfolio-->

    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
                $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'orderby'=> array('ID'=>'ASC'),
            );
            $obituary_query = new WP_Query($args);

            //$i = 0;
            $len = count($obituary_query->posts);
            foreach ($obituary_query->posts as $key=>$item) {
                if ($key == 0) { ?>
                    <li data-target="#myCarousel1" data-slide-to="<?php echo $key; ?>" class="active"></li>
            <?php  } else { ?>
                    <li data-target="#myCarousel1" data-slide-to="<?php echo $key; ?>"></li>
            <?php } ?>
      <?php 
            //$i++;
        }
           
            wp_reset_postdata();
            ?>
    </ol>

      <div class="portfolio">
        <div class="carousel-inner">

            <?php
                $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'orderby'=> array('ID'=>'ASC'),
            );
            $obituary_query = new WP_Query($args);

            //$i = 0;
            //$len = count($obituary_query->posts);
            foreach ($obituary_query->posts as $key=>$item) {
                if ($key == 0) { ?>
                    <div class="single-project-active item active">
            <?php  } else { ?>
                    <div class="single-project-active item">
            <?php } 
             ?>
        

          <div class="row-2 group">
            <div class="wrapper-4">
              <div class="image">
                  <?php $img = get_the_post_thumbnail_url($item->ID, 'full'); ?>
                    <img class="i" src="<?php echo $img; ?>" alt="">
              </div>
              <div class="heading-3">
                <div class="line-2"></div>
                <p class="text-11">
                        <?php
                                $categories = get_the_category($item->ID);
                                foreach($categories as $category){
                                    echo $category->cat_name;
                                }
                        ?>
                </p>
                <p class="text-12"><?php echo $item->post_title; ?></p>
              </div>
            </div>
            <div class="links">
              <div class="link-4 group">
                <a href="<?php echo get_the_permalink($item->ID); ?>">
                    <img class="layer-6" src="<?php echo get_template_directory_uri()?>/assets/images/image_16.png" alt="" width="12" height="8">
                    <p class="text-13">Project Details</p>
                </a>
              </div>
              <div class="link-5 group">
                <a class="" href="#myCarousel1" data-slide="next">
                    <img class="layer-7" src="<?php echo get_template_directory_uri()?>/assets/images/image_17.png" alt="" width="13" height="8">
                    <p class="text-14">View Slides</p>
                </a>
              </div>
              <div class="line-3"></div>
            </div>
          </div>
        </div>
<?php 
            // $i++;
            }
           
            wp_reset_postdata();
            ?>

      </div>
      </div>
  
    </div> 
  </div>

      <!--Portfolio-->

      <div class="testimonials">
        <div class="l-constrained-3">
          <div class="heading-4">
            <div class="line-4"></div>
            <p class="testimonials-2"><?php echo get_the_title(14); ?></p>
            <div class="text-15">
                <?php $post = get_post(14); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    if ( !empty($the_content) ) {
                      echo $the_content;
                    } ?>  
            </div>
          </div>
          <div class="company-logos group">
            <ul>
                <li><img src="<?php echo get_field( "logo_1", 14 ); ?>" alt=""></li>
                <li><img src="<?php echo get_field( "logo_2", 14 ); ?>" alt=""></li>
                <li><img src="<?php echo get_field( "logo_3", 14 ); ?>" alt=""></li>
                <li><img src="<?php echo get_field( "logo_4", 14 ); ?>" alt=""></li>
                <li><img src="<?php echo get_field( "logo_5", 14 ); ?>" alt=""></li>
                <li><img src="<?php echo get_field( "logo_6", 14 ); ?>" alt=""></li>
                <li><img src="<?php echo get_field( "logo_7", 14 ); ?>" alt=""></li>
            </ul>
          </div>
        </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php
                $args = array(
                'post_type' => 'our_testimonials',
                'posts_per_page' => 3,
                'orderby'=> array('ID'=>'ASC'),
            );
            $obituary_query = new WP_Query($args);

            $i = 0;
            $len = count($obituary_query->posts);
            foreach ($obituary_query->posts as $key=>$item) {
                if ($key == 0) { ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="active"></li>
            <?php  } else { ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>"></li>
            <?php } ?>
      <?php 
            $i++;
        }
           
            wp_reset_postdata();
            ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

        <?php
                $args = array(
                'post_type' => 'our_testimonials',
                'posts_per_page' => 3,
                'orderby'=> array('ID'=>'ASC'),
            );
            $obituary_query = new WP_Query($args);

            $i = 0;
            $len = count($obituary_query->posts);
            foreach ($obituary_query->posts as $key=>$item) {
                if ($key == 0) { ?>
                    <div class="feedbacks group item active">
            <?php  } else { ?>
                    <div class="feedbacks group item">
            <?php } 
             ?>

              <div class="single-feedback carousel-caption">
                      <div class="image-2">
                            <?php $img = get_the_post_thumbnail_url($item->ID, 'thumbnail'); ?>
                            <img class="i" src="<?php echo $img; ?>" alt="">
                      </div>
                      <div class="text-16"><?php echo $item->post_content; ?></div>
                      <div class="wrapper-5">
                        <div class="line-5"></div>
                        <div class="gap-holder">
                          <?php echo $item->post_title; ?>
                        </div>
                      </div>
                      <p class="text-18"><?php echo get_field( "designation", $item->ID ); ?></p>
                    </div>
                </div>         

        <?php 
             $i++;
            }
           
            wp_reset_postdata();
            ?>
  
    </div>

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>

      </div>
      <div class="team">
        <div class="l-constrained-2">
          <div class="heading-5">
            <div class="line-6"></div>
            <p class="text-19"><?php echo get_the_title(16); ?></p>
            <div class="text-20">
                    <?php $post = get_post(16); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    if ( !empty($the_content) ) {
                      echo $the_content;
                    } ?>
            </div>
          </div>

        <div class="profiles col-md-12">

            <?php $args = array(
                'post_type' => 'team',
                'orderby'=> array('ID'=>'ASC'),
            );
            $team_query = new WP_Query($args); 
            foreach ($team_query->posts as $key=>$team) {
                ?>

            <div class="col-md-3 col-sm-3 col-xs-12 team_member">
                <div class="team_image">
                    <?php $img = get_the_post_thumbnail_url($team->ID, 'thumbnail'); ?>
                            <img class="i" src="<?php echo $img; ?>" alt="">
                </div>
                <div class="team_name">
                    <p><strong><?php echo $team->post_title; ?></strong></p>
                    <p><?php echo $team->post_excerpt; ?></p>
                </div>

                <div class="team_details">
                    <div class="team_left">
                        <div class="team_image">
                        <?php $img = get_the_post_thumbnail_url($team->ID, 'thumbnail'); ?>
                                <img class="i" src="<?php echo $img; ?>" alt="">
                        </div>
                        <div class="line-01"></div>
                        <div class="line-02"></div>
                        <div class="team_name">
                        <p><strong><?php echo $team->post_title; ?></strong></p>
                        <p><?php echo $team->post_excerpt; ?></p>
                        </div>
                    </div>
                    <div class="team_right">
                        <?php echo $team->post_content; ?>
                    </div>
                    
                </div>
            </div>
            <?php } ?>
            <div style="clear:both"></div>


        </div><div style="clear:both"></div>


        </div>
      </div>
    </div>

<!-- fusion index page end -->



<?php // if ( have_posts() ) {

// 	// Load posts loop.
// 	while ( have_posts() ) {
// 		the_post();

// 		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
// 	}

// 	// Previous/next page navigation.
// 	twenty_twenty_one_the_posts_navigation();

// } else {

// 	// If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/content/content-none' );

// }

get_footer();
