<?php
/*
Plugin Name:  WP Maybe Remove Pages
Plugin URI:   https://github.com/Horttcore/wp-maybe-remove-pages
Description:  Maybe disable pages admin menu entry.
Version:      0.1.0
Author:       Ralf Hortt
Author URI:   https://ralfhortt.dev/
License:      GPL
*/

namespace RalfHortt\MaybeDisablePages;

add_action( 'admin_menu', function(){
    remove_menu_page('edit.php?post_type=page');
} );