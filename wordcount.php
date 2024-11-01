<?php
/*
Plugin Name: Simple Post Word Count
Plugin URI: http://www.ryanlineker.com/plugins/wordcount
Description: A simple plugin that displays the number of words in any published post.
Version: 1.0
Author: Ryan Lineker
Author URI: http://www.ryanlineker.com
License: GPL2
*/

function wordcount() {
	$words = str_word_count( get_the_content() );	
	print $words;
}

?>