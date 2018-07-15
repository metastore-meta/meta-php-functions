<?php

class out_Normalize {

	/**
	 * Normalize DATA (lower case & replace space).
	 *
	 * @param $string
	 *
	 * @return string
	 */
	public static function outNormalize( $string ) {
		$replace = str_replace( ' ', '-', $string );
		$out     = mb_strtolower( $replace, 'UTF-8' );

		return $out;
	}
}