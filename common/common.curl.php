<?php

class Class_cURL {

	/**
	 * cURL: Get JSON.
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function cURL( $url ) {
		$headers = [
			'Content-Type: application/json',
		];

		$ch = curl_init() or die( 'curl issue' );

		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_POST, false );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

		$out = curl_exec( $ch );
		curl_close( $ch );

		return $out;
	}

	/**
	 * cURL: JSON cache.
	 *
	 * @param $url
	 *
	 * @return mixed
	 */
	public static function jsonCache( $url ) {
		$path    = '/../cache/';
		$cache   = __DIR__ . $path . md5( $url );
		$refresh = 60 * 60;

		if ( ( ( $refresh ) < ( time() - filectime( $cache ) ) || filesize( $cache ) == 0 ) ) {
			$out = json_decode( self::cURL( $url ), true );

			$handle = fopen( $cache, 'wb' ) or die( 'no fopen' );
			$json_cache = self::cURL( $url );

			fwrite( $handle, $json_cache );
			fclose( $handle );
		} else {
			$out = json_decode( file_get_contents( $cache ), true );
		}

		return $out;
	}
}