<?php

namespace ATPAcl\Model;

class Group extends \ATP\ActiveRecord
{
	protected function _relations()
	{
		return array(
			'permissions' => array(
				'class' => '\ATPAcl\Model\Permission',
				'via' => 'atpacl_group_permissions'
			),
		);
	}

	public function displayName()
	{
		return $this->name;
	}
}
Group::init();
