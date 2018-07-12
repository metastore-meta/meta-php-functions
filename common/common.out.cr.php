<?php

class out_CR {

	/**
	 * METADATA CR.
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function outCR() {
		$meta_cr = 'PHNwYW4gY2xhc3M9Im1ldGFkYXRhLWNyIj5NYWRlIHdpdGggPHNwYW4gY2xhc3M9ImZhcyBmYS1oZWFydCI+PC9zcGFuPiBieSA8YSB0aXRsZT0iV2ViIEFwcGxpY2F0aW9uIERldmVsb3BtZW50IENvbXBhbnkiIGhyZWY9Imh0dHBzOi8vbWV0YWRhdGEuZm91bmRhdGlvbi8iPjxzdHJvbmc+TUVUQURBVEE8L3N0cm9uZz48L2E+PC9zcGFuPg==';
		$meta_cr = base64_decode( $meta_cr );

		echo $meta_cr;
	}
}