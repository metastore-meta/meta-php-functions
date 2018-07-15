<?php

class get_MessageText {

	/**
	 * Wiki Framework: Message.
	 *
	 * @param $id
	 * @param $key
	 *
	 * @return string
	 */
	public static function getMessageText( $id, $key ) {
		$string  = 'mw-ext-' . $id . '-' . $key;
		$message = wfMessage( $string )->inContentLanguage();
		$out     = $message->text();

		return $out;
	}
}