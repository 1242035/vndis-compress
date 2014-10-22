<?php
/*
Plugin Name: Html Compress
Plugin URI: http://vndis.com
Description: Compress html output
Version: 1.0.0
Author: http://vndis.com
License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/
function add_header_compress()
{
	if( !is_admin() ){ include_once('bbit-compress.php'); }
}
add_action('init', 'add_header_compress');
