<?php
/**
 * @author Paul van der Meijs <code@lowtone.nl>
 * @copyright Copyright (c) 2011-2012, Paul van der Meijs
 * @license http://wordpress.lowtone.nl/license/
 * @version 1.0
 */

namespace lowtone\libre\extend\posts {

	use WP_Query,
		lowtone\wp\posts\out\PostListDocument,
		lowtone\wp\queries\Query;

	function getQuery($atts) {
		return new Query(new WP_Query($atts));
	}

	/**
	 * @todo Fix recursion problems.
	 * @param array $atts Options for the post query.
	 * @return string Returns the post list as a HTML string.
	 */
	function createPosts($atts) {
		$query = getQuery($atts);

		$postListDocument = new PostListDocument($query->getPosts());

		$postListDocument->build();

		$template = get_template_directory() . "/templates/extra/posts.xsl";

		if ($templateDocument = \DOMDocument::load($template))
			$postListDocument = $postListDocument->transform($templateDocument);

		return $postListDocument->saveHTML();
	}

}