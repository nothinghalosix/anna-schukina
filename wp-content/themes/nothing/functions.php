<?php
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'primary' => __( 'Hauptmenu', 'nothing' ),
) );


add_action( 'after_setup_theme', 'default_attachment_display_settings' );

function default_attachment_display_settings() {
  update_option( 'image_default_align', 'none' );
  update_option( 'image_default_link_type', 'none' );
  update_option( 'image_default_size', 'full' );
  // add_editor_style( 'css/mondial-editor-style.css' );
}

//delete all a tags arround images (default value in wordpress)
function wpb_imagelink_setup() {
  $image_set = get_option( 'image_default_link_type' );

  if ($image_set !== 'none') {
    update_option('image_default_link_type', 'none');
  }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

//strip all style formats when pasting text from html or wordinto tinymce editor in wordpress
function mytheme_tinymce_settings($settings)
{
  // Add block format elements you want to show in dropdown
  $settings['block_formats'] = 'Paragraph=p;Heading 1=h2;Heading 2=h3;Heading 3=h4';

  $settings['paste_as_text'] = true;
  return $settings;
}

add_filter('tiny_mce_before_init', 'mytheme_tinymce_settings');

function my_single_template($single) {
  if(file_exists(get_template_directory() . '/single-' . get_the_ID() . '.php'))
    return get_template_directory() . '/single-' . get_the_ID() . '.php';
  return $single;
}
add_filter('single_template', 'my_single_template');

function custom_conference_in_home_loop( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'seitenblicke') );
    return $query;
  }
add_filter( 'pre_get_posts', 'custom_conference_in_home_loop' );


//set view of admin backend for user with no admin rights!
function remove_menus(){
    $current_user_role = get_userdata(wp_get_current_user()->ID)->roles[0]; //get first user role in the array of roles (never give a user multiple roles)

    // remove_menu_page( 'index.php' );                    // Dashboard
    //remove_menu_page( 'edit.php' );                     // Seiten
    remove_menu_page( 'edit-comments.php' );            // Comments

    if ( !current_user_can('administrator') ) { //is user is not admin go further and restrict menu items!
      remove_menu_page( 'themes.php' );                 // Appearance
      remove_menu_page( 'plugins.php' );                // Plugins
      remove_menu_page( 'tools.php' );                  // Tools
      remove_menu_page( 'options-general.php' );        // Settings
      remove_menu_page( 'edit.php?post_type=acf' );     // Eigene Felder
      remove_menu_page( 'cptui_main_menu' );            // CPT UI
    }
}
add_action( 'admin_menu', 'remove_menus', 999 );

add_theme_support( 'menus' );


function load_custom_wp_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/wp-admin.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


//covering homepage title
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home');
  }
  return $title;
}

function custom_colors() {
    $upload_dir = wp_upload_dir();
    echo '<link rel=\'stylesheet\' id=\'colors-css\'  href=\''.$upload_dir['baseurl'].'/admin-color-schemer/scheme.css?\' type=\'text/css\' media=\'all\' />';
}

add_action('admin_head', 'custom_colors');

// add class to next, prev post link
// add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
// add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');
//
// function posts_link_attributes_1() {
//     return 'class="bg-secondary my-6 text-white font-bold px-4 py-4 no-underline hover:bg-secondary-light"';
// }
// function posts_link_attributes_2() {
//     return 'class="bg-secondary my-6 text-white font-bold px-4 py-4 no-underline hover:bg-secondary-light"';
// }



// translation function
function nothing_setup() {
	load_theme_textdomain( 'nothing' );
}
add_action( 'after_setup_theme', 'nothing_setup' );

?>
