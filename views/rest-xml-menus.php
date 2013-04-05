<?php
use lowtone\wp\menus\out\MenusDocument;

return function($options) {
	$document = new MenusDocument();

	$document->build();

	$document->out();
};