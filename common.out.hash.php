<?php

class out_Hash {

	/**
	 * Hash generator.
	 *
	 * @return string
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function outHash() {
		$hash = hash( 'crc32b', date( 'Y-m-d.H-i-s' ) . md5( uniqid( mt_rand(), true ) ) );

		return $hash;
	}
}