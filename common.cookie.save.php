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
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function saveCookie( $type, $name, $value ) {
		if ( $type === 'form' ) {
			$cookie = setcookie( $name, Core::outClear( $_POST[ $value ] ), strtotime( '+30 days' ) );
		} else {
			$cookie = setcookie( $name, Core::outClear( $value ) );
		}

		return $cookie;
	}
}