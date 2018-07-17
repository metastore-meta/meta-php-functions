<?php

class Class_File_Hash_SHA1 {

	/**
	 * Calculate the sha1 hash of a file.
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function outFileHashSHA1( $filename ) {
		$out = sha1_file( $filename );

		return $out;
	}
}