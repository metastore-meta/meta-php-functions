<?php

class Class_Translit {

	/**
	 * Transliterate a string.
	 *
	 * @param $string
	 * @param string $rule
	 *
	 * @return string
	 */
	public static function outTranslit( $string, $rule = 'Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; Lower();' ) {
		$trans  = \Transliterator::create( $rule );
		$string = preg_replace( '/[-\s]+/', '-', $trans->transliterate( $string ) );
		$out    = trim( $string, '-' );

		return $out;
	}
}