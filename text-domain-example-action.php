<?php
/**
 * Plugin Name:       WP Github Actions
 * Plugin URI:        https://github.com/YTTechiePress/wp-github-actions/
 * Description:       Plugin that adds streamline API to theme
 * Version:           0.1.0
 * Author:            YTTechiePress
 * Author URI:        https://github.com/YTTechiePress/wp-github-actions/
 * Text Domain:       wp-github-actions
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
 add_action( 'the_title', 'text_domain_example' );
 
 function text_domain_example() {
  _e( 'hello is the right word.', 'wp-github-action' );
 }
