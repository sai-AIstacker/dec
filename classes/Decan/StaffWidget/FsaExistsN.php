<?php
/**
 * Account Exists No (Food Service) Staff Widget class
 *
 * @since 12.7
 *
 * @package Decan
 */

namespace Decan\StaffWidget;

class FsaExistsN extends FsaExists
{
	function html( $value = 'N' )
	{
		return parent::html( $value );
	}
}
