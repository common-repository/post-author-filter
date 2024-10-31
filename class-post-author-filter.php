<?php

/*  Copyright 2013  Frank Staude  (email : frank@staude.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * post_autor_filter class
 * 
 * Implements the autor filter for post/page lists
 * 
 * Revision: $Rev: 800408 $
 * Last Change: $Date: 2013-11-07 07:38:58 -0600 (Thu, 07 Nov 2013) $
 * from: $Author: f.staude $
 * 
 * ID:  $Id: class-post-author-filter.php 800408 2013-11-07 13:38:58Z f.staude $
 */
class post_author_filter {

    /**
     * Constructor
     * 
     * Register all actions and filters
     */
    function __construct() {
        add_action( 'plugins_loaded',           array( 'post_author_filter', 'load_translations' ) );
        add_filter( 'restrict_manage_posts' ,   array( 'post_author_filter', 'add_author_filter' ) );
    }

    /**
     * load the plugin textdomain
     * 
     * load the plugin textdomain with translations
     */
    static public function load_translations() {
        load_plugin_textdomain( 'post_author_filter', false, apply_filters ( 'post_author_filter_translationpath', dirname( plugin_basename( __FILE__ )) . '/languages/' ) ); 
    }
    
    /**
     * Adds the author selectbox to the lis post/page site
     * 
     */
    static public  function add_author_filter() {
        $arguments = array( 'name' => 'author', 
                            'show_option_all' => __( 'All authors', 'post_author_filter' ) 
                          );
        if ( isset( $_GET[ 'user' ] ) ) {
            $arguments[ 'selected' ] = $_GET[ 'user' ];
        }
        wp_dropdown_users( $arguments );
    }
}
?>
