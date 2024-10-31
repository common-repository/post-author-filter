<?php
/*
Plugin Name: Post Author Filter
Plugin URI: http://www.staude.net/wordpress/plugins/PostAuthorFilter
Description: Add a author selection on post / page editpage
Version: 0.2
Author: Frank Staude
Text Domain: post_author_filter
Domain Path: languages
Author URI: http://www.staude.net/
Compatibility: WordPress 4.0
License: GPL
*/

/**
 * Revision: $Rev: 988982 $
 * Last Change: $Date: 2014-09-13 05:47:32 -0500 (Sat, 13 Sep 2014) $
 * from: $Author: f.staude $
 * 
 * ID:  $Id: post-author-filter.php 988982 2014-09-13 10:47:32Z f.staude $
 */
if (!class_exists( 'post_author_filter' ) ) {

    include_once dirname( __FILE__ ) .'/class-post-author-filter.php';

    $post_author_filter = new post_author_filter();

}