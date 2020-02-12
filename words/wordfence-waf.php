<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/deantay1/public_html/words/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/deantay1/public_html/words/wp-content/wflogs/');
	include_once '/home/deantay1/public_html/words/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>