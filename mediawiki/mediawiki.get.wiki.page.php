<?php

class Class_WikiPage {

	/**
	 * Wiki Framework: WikiPage.
	 *
	 * @return \WikiPage
	 * @throws \MWException
	 */
	public static function getWikiPage() {
		$context = RequestContext::getMain();
		$out     = $context->getWikiPage();

		return $out;
	}
}