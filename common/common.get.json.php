<?php

class Class_JSON {

	/**
	 * Get JSON data.
	 *
	 * @param $src
	 *
	 * @return mixed
	 */
	public static function getJSON( $src ) {
		$src = file_get_contents( $src );
		$out = json_decode( $src, true );

		return $out;
	}
}