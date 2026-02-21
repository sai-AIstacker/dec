<?php
/**
 * Account Status Active (Food Service) Widget class
 *
 * @since 12.7
 *
 * @package Decan
 */

namespace Decan\Widget;

class FsaStatusActive extends FsaStatus
{
	function html( $value = 'active' )
	{
		return parent::html( $value );
	}
}
