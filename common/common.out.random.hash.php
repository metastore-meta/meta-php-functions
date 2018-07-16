<?php

class Class_Random_Hash {

	/**
	 * Random hash.
	 *
	 * @param $algo
	 * @param int $length
	 *
	 * @return string
	 * @throws \Exception
	 */
	public static function outRandomHash( $algo, $length = 32 ) {
		$date = new \DateTime();
		$out  = hash( $algo, md5( $date->getTimestamp() . uniqid( bin2hex( random_bytes( $length ) ), true ) ) );

		return $out;
	}
}