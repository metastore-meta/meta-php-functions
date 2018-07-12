<?php

class get_Config {

	/**
	 * Wiki Framework: Configuration parameters.
	 *
	 * @param $config
	 *
	 * @return mixed
	 * @throws \ConfigException
	 * -------------------------------------------------------------------------------------------------------------- */
	public static function getConfig( $config ) {
		$context = RequestContext::getMain()->getConfig();
		$out     = $context->get( $config );

		return $out;
	}
}