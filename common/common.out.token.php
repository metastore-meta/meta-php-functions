<?php

class out_Token {

	/**
	 * Token generator.
	 *
	 * @return string
	 * @throws Exception
	 */
	public static function outToken() {
		$out = base64_encode( random_bytes( 32 ) );

		return $out;
	}
}