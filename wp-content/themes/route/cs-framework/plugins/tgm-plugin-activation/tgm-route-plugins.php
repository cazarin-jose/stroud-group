<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.2
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) .'/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'route_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function route_register_required_plugins() {

  /**
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(

    // WPBakery Visual Composer
    array(
      'name'     => 'WPBakery Page Builder',
      'slug'     => 'js_composer',
      'source'   => FRAMEWORK_PLUGIN_DIR .'/zip/js_composer.zip',
      'required' => false,
      'version'  => '6.8.0',
    ),

    // Revolution Slider
    array(
      'name'     => 'Revolution Slider',
      'slug'     => 'revslider',
      'source'   => FRAMEWORK_PLUGIN_DIR .'/zip/revslider.zip',
      'required' => false,
      'version'  => '6.5.14',
    ),

    // LayerSlider WP
    array(
      'name'     => 'LayerSlider WP',
      'slug'     => 'LayerSlider',
      'source'   => FRAMEWORK_PLUGIN_DIR .'/zip/layerslider.zip',
      'required' => false,
      'version'  => '6.9.2',
    ),

    // Go Pricing
    array(
      'name'     => 'Go - Responsive Pricing & Compare Tables',
      'slug'     => 'go_pricing',
      'source'   => FRAMEWORK_PLUGIN_DIR .'/zip/go_pricing.zip',
      'required' => false,
      'version'  => '3.3.19',
    ),

    // Breadcrumb NavXT
    array(
      'name'     => 'Breadcrumb NavXT',
      'slug'     => 'breadcrumb-navxt',
      'required' => false,
    ),

    // Post Types Order
    array(
      'name'     => 'Post Types Order',
      'slug'     => 'post-types-order',
      'required' => false,
    ),

    // Regenerate Thumbnails
    array(
      'name'     => 'Regenerate Thumbnails',
      'slug'     => 'regenerate-thumbnails',
      'required' => false,
    ),

    // Contact Form 7
    array(
      'name'     => 'Contact Form 7',
      'slug'     => 'contact-form-7',
      'required' => false,
    ),

  );

  /**
   * Array of configuration settings. Amend each line as needed.
   * If you want the default strings to be available under your own theme domain,
   * leave the strings uncommented.
   * Some of the strings are added into a sprintf, so see the comments at the
   * end of each line for what each argument will be.
   */
  $config = array(
    'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => false,                   // Automatically activate plugins after installation or not.
    'message'      => ''                       // Message to output right before the plugins table.
  );

  tgmpa( $plugins, $config );

}