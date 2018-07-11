<?php

class out_Clear {

	/**
	 * Clear DATA (escape html).
	 *
	 * @param $string
	 *
	 * @return string
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function outClear( $string ) {
		$trim = trim( $string );
		$out  = htmlspecialchars( $trim, ENT_QUOTES );

		return $out;
	}
}