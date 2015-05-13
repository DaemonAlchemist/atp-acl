<?php

namespace ATPAcl;

class Module extends \ATP\Module
{
	protected $_moduleName = "ATPAcl";
	protected $_moduleBaseDir = __DIR__;
	
	public function getInstallDbQueries()
	{
		return array(
		);
	}
}
