<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Fusion
 * @since Fusion 1.0
 */

?>
			<!-- </main>--> <!-- #main -->
		<!-- </div>--> <!-- #primary --> 
	<!--</div>--> <!-- #content -->

	<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<!-- fusion footer start -->

<footer class="footer">
      <div class="contact" id="contact">
        <div class="l-constrained">
          <div class="heading-6">
            <div class="line-9"></div>
            <p class="text-36"><?php echo get_the_title(18); ?></p>
            <div class="text-37">
            		<?php $post = get_post(18); // specific post
                    $the_content = apply_filters('the_content', $post->post_content);
                    if ( !empty($the_content) ) {
                      echo $the_content;
                    } ?>
            </div>
          </div>
          <!-- <div class="contact-form">
            <div class="row group">
              <div class="col-3">
                <div class="input-active">
                  <p class="text-38">Your Name</p>
                  <p class="text-39">Benjamin Silva</p>
                  <div class="shape"></div>
                </div>
                <div class="input">
                  <p class="company">company</p>
                  <div class="shape-2"></div>
                </div>
              </div>
              <div class="col-4">
                <div class="input-2">
                  <p class="text-40">Your Email</p>
                  <div class="shape-3"></div>
                </div>
                <div class="input-3">
                  <p class="subject">Subject</p>
                  <div class="shape-4"></div>
                </div>
              </div>
            </div>
            <div class="input-4 group">
              <p class="text-41">Your message</p>
              <div class="shape-5"></div>
            </div>
            <div class="button">
              <div class="text-42 group">
                <img class="text-44" src="<?php echo get_template_directory_uri()?>/assets/images/image.png" alt="$" width="18" height="11" title="$">
                <p class="text-43">get in touch</p>
              </div>
            </div>
          </div> -->
          <?php echo do_shortcode('[custom_contact_form]'); ?>
          <div class="footer-2 group">


          	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

            <!-- <div class="logo">
              <img class="f" src="<?php //echo get_template_directory_uri()?>/assets/images/f.png" alt="" width="11" height="18">
            </div>
            <p class="text-45"><span class="text-style">California Office</span><br><span class="text-style-2">4243 Woo</span><span class="text-style-3">dland Terrace</span><br><span class="text-style-3">Sacramento, CA 95814</span><br><span class="text-style-3">916 753 2645</span></p>
            <p class="text-46"><span class="text-style">New york Office</span><br><span class="text-style-2">885 Oakwoo</span><span class="text-style-3">d Avenue</span><br><span class="text-style-3">New York, NY 10013</span><br><span class="text-style-3">212 660 0744</span></p>
            <img class="text-47" src="<?php //echo get_template_directory_uri()?>/assets/images/other_contact_jobs_templa.png" alt="Other Contact jobs@templateocean.com " width="170" height="107" title="Other Contact jobs@templateocean.com "> -->
          </div>
        </div>
      </div>
    </footer>


	<!-- fusion footer end -->

<!-- </div> -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
