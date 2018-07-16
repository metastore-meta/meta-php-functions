<?php

class Class_Random_Int {

	/**
	 * Random integer.
	 *
	 * @param $min
	 * @param $max
	 *
	 * @return int
	 * @throws \Exception
	 */
	public static function outRandomInt( $min, $max ) {
		$out = random_int( $min, $max );

		return $out;
	}
}