<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Fusion
 * @since Fusion 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- fusion head start-->

	<title>Fusion</title>
    
    <meta name="description" content="Your site's description should be here">
    <meta name="keywords" content="Your site's keywords should be here">
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="style.css"> 

    <!--Bootstrap-->
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--/Bootstrap-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,regular,italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php get_template_directory_uri()?>/assets/js/match-height.js"></script> 
    <script>
		$(function () {
			$('.match-height-bootstrap-row > * > *').matchHeight();
			$('.match-height > *').matchHeight();
		})
	</script>

	<!-- fusion head end -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main"> -->


<!-- fusion header start -->

<header class="header row">
      <div class="homepage container-fluid">
        <div class="l-constrained-4">
          <div class="heading">
            <div class="box-holder">
              <div class="text">
                <!-- <p>We’re <span class="colorf7ac53">Fusion</span>, We Build Things for Human</p> -->
                <?php $post = get_post(2); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    if ( !empty($the_content) ) {
                      echo $the_content;
                    } ?>
              </div>
            </div>
            
            <nav class="nav">
            	<?php
					wp_nav_menu( array( 'theme_location' => 'custom-menu' ) ); 
				?>
              <!-- <ul class="nav-list group">
                <li><p class="nav-item-1"><a href="#">Design</a></p></li>
                <li><p class="nav-item-3"><a href="#">Strategy</a></p></li>
                <li><p class="nav-item-5"><a href="#">brandinG</a></p></li>
              </ul> -->
            </nav>
          </div>
          <a href="#services">
          	<img class="arrow" src="<?php echo get_template_directory_uri()?>/assets/images/arrow.png" alt="" width="13" height="8">
          </a>
          <div class="navigation-on-home group">
            <a href="<?php echo get_home_url(); ?>">
            	<!-- <img class="fusion" src="<?php echo get_template_directory_uri()?>/assets/images/fusion.png" alt="" width="45" height="45"> -->
            				<?php $img = get_field('logo', 2); ?>
                            <img class="i" src="<?php echo $img; ?>" alt="">
            </a>
            <div class="get-intouch group">
              <img class="layer" src="<?php echo get_template_directory_uri()?>/assets/images/image_30.png" alt="" width="11" height="7">
              <a href="#contact"><p class="text-2">Get in touch</p></a>
            </div>
          </div>
        </div>
      </div>
    </header>

<!-- fusion header end  -->
