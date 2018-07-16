<?php

class Class_Cookie {

	/**
	 * Cookie: save value.
	 *
	 * @param $type
	 * @param $name
	 * @param $value
	 * @param string $time
	 *
	 * @return bool
	 */
	public static function saveCookie( $type, $name, $value, $time = '+30 days' ) {
		if ( $type === 'form' ) {
			$out = setcookie( $name, Core::outClear( $_POST[ $value ] ), strtotime( $time ) );
		} else {
			$out = setcookie( $name, Core::outClear( $value ) );
		}

		return $out;
	}

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