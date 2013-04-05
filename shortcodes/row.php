<?php
/**
 * @author Paul van der Meijs <code@lowtone.nl>
 * @copyright Copyright (c) 2011-2012, Paul van der Meijs
 * @license http://wordpress.lowtone.nl/license/
 * @version 1.0
 */

return function($atts, $content) {
	return '<div class="row">' .
		do_shortcode($content) .
		'</div>';
};