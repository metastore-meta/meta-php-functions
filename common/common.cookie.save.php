<?php

class cookie_Save {

	/**
	 * Cookie: save value.
	 *
	 * @param $type
	 * @param $name
	 * @param $value
	 *
	 * @return mixed
	 */
	public static function saveCookie( $type, $name, $value ) {
		if ( $type === 'form' ) {
			$out = setcookie( $name, Core::outClear( $_POST[ $value ] ), strtotime( '+30 days' ) );
		} else {
			$out = setcookie( $name, Core::outClear( $value ) );
		}

		return $out;
	}
}