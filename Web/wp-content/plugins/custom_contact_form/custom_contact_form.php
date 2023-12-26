<?php
/*
Plugin Name: Custom Contact Form
Description: A custom contact form plugin.
Version: 1.0
Author: Smith Nandagawali
*/

// Define the table name
global $wpdb;
$table_name = $wpdb->prefix . 'contact_form_submissions';

// Create the database table on plugin activation
function custom_contact_form_create_table() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'contact_form_submissions';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        cf_id mediumint(9) NOT NULL AUTO_INCREMENT,
        cf_name varchar(100) NOT NULL,
        cf_company varchar(100),
        cf_email varchar(100) NOT NULL,
        cf_subject varchar(255),
        cf_message text NOT NULL,
        cf_submission_time datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'custom_contact_form_create_table');

// Register shortcode for the contact form
function custom_contact_form_shortcode() {
    ob_start();
    ?>
    <form id="custom-contact-form" method="post" class="contact-form">
        <div class="row group">
        <!-- <label for="name">Your Name:</label> -->
        <input type="text" name="name" placeholder="Your Name" required>

        <!-- <label for="email">Email:</label> -->
        <input type="email" name="email" placeholder="Your Email" required>

        <!-- <label for="company">Company:</label> -->
        <input type="text" name="company" placeholder="Company">

        <!-- <label for="subject">Subject:</label> -->
        <input type="text" name="subject" placeholder="Subject">

        <!-- <label for="message">Message:</label> -->
        <textarea name="message" placeholder="Message" required></textarea>

        <center><input type="submit" value="Get In Touch &#8594;"> </center>
    </div>
    </form>
    <?php
    return ob_get_clean();
}

add_shortcode('custom_contact_form', 'custom_contact_form_shortcode');

// Process form submissions
function custom_contact_form_process() {
    global $wpdb;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
        $name = sanitize_text_field($_POST['name']);
        $company = sanitize_text_field($_POST['company']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Insert submission into the database
        $wpdb->insert(
            $table_name,
            array(
                'cf_name' => $name,
                'cf_company' => $company,
                'cf_email' => $email,
                'cf_subject' => $subject,
                'cf_message' => $message,
            )
        );

        // Send email
        $to = 'snsmith67@gmail.com'; // Replace with your email address
        $subject = 'New Contact Form Submission';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $message_body = "Name: $name<br>
                         Company: $company<br>
                         Email: $email<br>
                         Subject: $subject<br>
                         Message: $message";

        wp_mail($to, $subject, $message_body, $headers);

        // Redirect after submission (optional)
        wp_redirect(home_url('/thank-you/'));
        exit;
    }
}

add_action('init', 'custom_contact_form_process');
