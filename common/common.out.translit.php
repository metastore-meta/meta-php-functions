<?php

class out_Translit {

	/**
	 * Transliterate a string.
	 *
	 * @param $string
	 *
	 * @return string
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function outTranslit( $string ) {
		$rule   = 'Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();';
		$trans  = Transliterator::create( $rule );
		$string = preg_replace( '/[-\s]+/', '-', $trans->transliterate( $string ) );
		$out    = trim( $string, '-' );

		return $out;
	}
}