<?php

class Class_Extract_Options {

	/**
	 * Converts an array of values in form [0] => "name=value" into a real
	 * associative array in form [name] => value. If no = is provided,
	 * true is assumed like this: [name] => true.
	 *
	 * @param array $options
	 * @param PPFrame $frame
	 *
	 * @return array
	 */
	public static function extractOptions( $options = [], PPFrame $frame ) {
		$results = [];

		foreach ( $options as $option ) {
			$pair = explode( '=', $frame->expand( $option ), 2 );

			if ( count( $pair ) === 2 ) {
				$name             = MW_EXT_Core::outClear( $pair[0] );
				$value            = MW_EXT_Core::outClear( $pair[1] );
				$results[ $name ] = $value;
			}

			if ( count( $pair ) === 1 ) {
				$name             = MW_EXT_Core::outClear( $pair[0] );
				$results[ $name ] = true;
			}
		}

		return $results;
	}
}