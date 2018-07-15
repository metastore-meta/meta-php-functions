<?php

class out_Hash {

	/**
	 * Hash generator.
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function outHash() {
		$date = new \DateTime();
		$out = hash( 'crc32b', sha1( $date->getTimestamp() . uniqid( bin2hex( random_bytes( 32 ) ), true ) ) );

		return $out;
	}
}