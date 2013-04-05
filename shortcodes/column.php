<?php
/**
 * @author Paul van der Meijs <code@lowtone.nl>
 * @copyright Copyright (c) 2011-2012, Paul van der Meijs
 * @license http://wordpress.lowtone.nl/license/
 * @version 1.0
 */

return function($atts, $content) {

	// Set width

	$width = trim(@$atts["width"] ?: "full");

	$replace = array(
		
			// Whitespace
			
			'/\s+/' => "-",

			// Divisions
			
			'/1\/2/' => "eight",
			'/1\/3/' => "one-third",
			'/2\/3/' => "two-thirds",
			'/1\/4/' => "four",
			'/1\/8/' => "two",

			// Numeric
			
			'/16/' => "sixteen",
			'/15/' => "fifteen",
			'/14/' => "fourteen",
			'/13/' => "thirteen",
			'/12/' => "twelve",
			'/11/' => "eleven",
			'/10/' => "ten",
			'/9/' => "nine",
			'/8/' => "eight",
			'/7/' => "seven",
			'/6/' => "six",
			'/5/' => "five",
			'/4/' => "four",
			'/3/' => "three",
			'/2/' => "two",
			'/1/' => "one"
		);

	$width = preg_replace(array_keys($replace), $replace, $width);

	// Create class

	$class = array_unique(array_merge(array(
			$width,
			"column"
		),
		preg_split("/ +/", @$atts["class"])
	));

	// Return output

	return '<div class="' . implode(" ", $class) . '">' .
		do_shortcode($content) .
		'</div>';
};