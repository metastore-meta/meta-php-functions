<?php

class Class_CR {

	/**
	 * METADATA CR.
	 *
	 * @return mixed
	 */
	public static function outCR() {
		$cr  = 'PHNwYW4gY2xhc3M9Im1ldGEtY3IiPjxpIGNsYXNzPSJmYXMgZmEtY29kZSI+PC9pPiB3aXRoIDxpIGNsYXNzPSJmYXMgZmEtaGVhcnQiIHN0eWxlPSJjb2xvcjogI2ZlNmUzYTsiPjwvaT4gYnkgPGEgdGl0bGU9IldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudCBDb21wYW55IiBocmVmPSJodHRwczovL21ldGFkYXRhLmZvdW5kYXRpb24vIj48c3Ryb25nPk1FVEFEQVRBPC9zdHJvbmc+PC9hPjwvc3Bhbj4=';
		$out = base64_decode( $cr );

		return $out;
	}
}