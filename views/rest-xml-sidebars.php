<?php
use lowtone\Util,
	lowtone\wp\sidebars\out\SidebarsDocument,
	lowtone\wp\sidebars\out\SidebarDocument,
	lowtone\wp\sidebars\widgets\out\WidgetsDocument,
	lowtone\wp\sidebars\widgets\out\WidgetDocument;

return function($options) {
	list($context, $id) = explode("/", $options["path"]);

	$document = new SidebarsDocument();
	
	if (is_null($id)) {
		$sidebars = Util::getContext();
		
		$sidebars[] = "sidebar";
	} else
		$sidebars = array($id);

	$document->build(array(
			SidebarsDocument::FILTER_SIDEBARS => $sidebars,
			SidebarsDocument::SIDEBAR_DOCUMENT_OPTIONS => array(
				SidebarDocument::WIDGETS_DOCUMENT_OPTIONS => array(
					WidgetsDocument::WIDGET_DOCUMENT_OPTIONS => array(
						WidgetDocument::BUILD_OUTPUT => true
					)
				)
			)
		));

	$document->out();
};