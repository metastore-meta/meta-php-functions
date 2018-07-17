<?php

class Class_File_Hash_MD5 {

	/**
	 * Calculate the md5 hash of a file.
	 *
	 * @param $filename
	 *
	 * @return string
	 */
	public static function outFileHashMD5( $filename ) {
		$out = md5_file( $filename );

		return $out;
	}
}