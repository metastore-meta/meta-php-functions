<?php

class Class_Timestamp {

	/**
	 * UNIX timestamp.
	 *
	 * @return int
	 */
	public static function outTimestamp() {
		$date = new \DateTime();
		$out  = $date->getTimestamp();

		return $out;
	}
}