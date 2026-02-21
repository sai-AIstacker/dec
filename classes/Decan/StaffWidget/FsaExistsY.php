<?php
/**
 * Account Exists Yes (Food Service) Staff Widget class
 *
 * @since 12.7
 *
 * @package Decan
 */

namespace Decan\StaffWidget;

class FsaExistsY extends FsaExists
{
	function html( $value = 'Y' )
	{
		return parent::html( $value );
	}
}
