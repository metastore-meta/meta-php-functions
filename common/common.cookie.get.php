<?php

class cookie_Get {

	/**
	 * Cookie: get value.
	 *
	 * @param $name
	 *
	 * @return mixed
	 */
	public static function getCookie( $name ) {
		$out = $_COOKIE[ $name ];

		return $out;
	}
}