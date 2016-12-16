<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

 function create_custom_post_types() {
    register_post_type( 'case_studies',
    // ^^ unique name
        array(
    //   ^^ defines settings for new post type
            'labels' => array(
                'name' => __( 'Case Studies' ),
            //   ^^  human readable name ^^ in left nav wp admin dash
                'singular_name' => __( 'Case Study' )
            //   ^^ human readable name for a single case study post
            ),
            'public' => true,
            'has_archive' => true,
            // ^^ because we want it to have an archive
            'rewrite' => array( 'slug' => 'case-studies' ),
            // ^^ name used in the URLs for your case study posts. They will look something like this: http://localhost:8888/accelerate/case-studies/something-something/
        )
    );
}
add_action( 'init', 'create_custom_post_types' );
// ^^ tells WP to add the function create_custom_post_types() to its init() function, which is one of the functions WP runs every time site is loaded
// note: sometimes this doesn't work, and to fix it, The easiest way to fix this is to have WordPress reset the permalinks. So, I will go to the Settings menu and click on Permalinks.
// I will then change the permalinks setting from Day and Name to Month and Name, although it really doesn’t matter which one I choose.
// I will then hit Save Changes, and then I will go back to my test case study and hit refresh. And, sure enough, there it is.
