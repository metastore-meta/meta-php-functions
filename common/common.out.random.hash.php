<?php

class Class_Random_Hash {

	/**
	 * Random hash generator.
	 *
	 * @param string $algo
	 * @param int $length
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function outRandomHash( $algo = 'crc32b', $length = 32 ) {
		$date = new \DateTime();
		$out  = hash( $algo, md5( $date->getTimestamp() . uniqid( bin2hex( random_bytes( $length ) ), true ) ) );

		return $out;
	}
}