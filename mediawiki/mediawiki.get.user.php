<?php

class get_User {

	/**
	 * Wiki Framework: User.
	 *
	 * @return \User
	 */
	public static function getUser() {
		$context = RequestContext::getMain();
		$out     = $context->getUser();

		return $out;
	}
}