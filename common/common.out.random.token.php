<?php

class Class_Random_Token {

	/**
	 * Token generator.
	 *
	 * @param int $length
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function outRandomToken( $length = 32 ) {
		$out = base64_encode( random_bytes( $length ) );

		return $out;
	}
}