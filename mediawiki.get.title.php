<?php

class get_Title {

	/**
	 * Wiki Framework: Title.
	 *
	 * @return null|\Title
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function getTitle() {
		$context = RequestContext::getMain();
		$out     = $context->getTitle();

		return $out;
	}
}