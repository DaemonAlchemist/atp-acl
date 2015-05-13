<?php

namespace ATPAcl\Model;

class Permission extends \ATP\ActiveRecord
{
	public function displayName()
	{
		return $this->name;
	}
}
Permission::init();
