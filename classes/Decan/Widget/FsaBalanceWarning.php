<?php
/**
 * Balance Warning (Food Service) Widget class
 *
 * @since 12.7
 *
 * @package Decan
 */

namespace Decan\Widget;

class FsaBalanceWarning extends FsaBalance
{
	function html( $value = '' )
	{
		$value = $GLOBALS['warning'];

		return parent::html( $value );
	}
}
